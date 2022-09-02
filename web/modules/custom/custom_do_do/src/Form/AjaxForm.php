<?php

namespace Drupal\custom_do_do\Form;

use Drupal;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Renderer;
use Drupal\user\Entity\User;
use Drupal\Core\Mail\MailManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AjaxForm extends FormBase {
    

  /**
   * Returns a unique string identifying the form.
   *
   * The returned ID should be a unique string that can be a valid PHP function
   * name, since it's used in hook implementation names such as
   * hook_form_FORM_ID_alter().
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'pizza_ajax_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = \Drupal::config('pizza9.settings');
    
    $type = $config->get('Types');
    foreach ($type as $key => $name) {
      if ($name['Available'] === 0) {
        unset($type[$key]);
      }
    }

    $form['quantity'] = [
      '#type' => 'fieldset',
      '#tree' => TRUE,
    ];

    foreach ($type as $key => $name) {
      $form['quantity'][$key] = [
        '#title' => $name['Name'] . '. Цена за штуку: ' . $name['Price'],
        '#type' => 'select',
        '#options' => range(0, $name['Available']),
        '#ajax' => [
          'callback' => '::myAjaxCallback', 
          // don't forget :: when calling a class method.
          //'callback' => [$this, 'myAjaxCallback']//alternative notation
          'disable-refocus' => FALSE, // Or TRUE to prevent re-focusing on the triggering element.
          'event' => 'change',
          'wrapper' => 'edit-price', // This element is updated with this AJAX callback.
          'progress' => [
            'type' => 'throbber',
            'message' => $this->t('Считаем пиццы...'),
          ],
        ],
      ];
    }

    $dist = $config->get('District');
    foreach ($dist as $key => $name) {
      if ($name['Available'] === 0) {
        unset($dist[$key]);
      }
      else {
        $dist[$key]['name'] .= '. Цена доставки: ' . $dist[$key]['Price'];
      }
    }

    $form['district'] = [
      '#type' => 'radios',
      '#options' => array_combine(array_keys($dist), array_column($dist, 'name')),
      '#ajax' => [
        'callback' => '::myAjaxCallback',
        'disable-refocus' => FALSE,
        'event' => 'change',
        'wrapper' => 'edit-price',
        'progress' => [
          'type' => 'throbber',
          'message' => $this->t('Считаем пиццы...'),
        ],
      ],
      '#required' => TRUE,
      '#title' => 'Ваш район',
    ];

    $form['phone'] = [
      '#type' => 'tel',
      '#title' => 'Телефон',
      '#required' => TRUE,
    ];

    $form['address'] = [
      '#type' => 'textfield',
      '#title' => 'Адрес',
      '#required' => TRUE,
    ];

    $form['price'] = [
      '#type' => 'textfield',
      '#attributes' => ['readonly' => 'readonly'],
      '#required' => TRUE,
    ];

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];
    return $form;
  }

  public function myAjaxCallback(array &$form, FormStateInterface $form_state) {
    $config = \Drupal::config('pizza4.settings');
    $type = $config->get('Types');
    foreach ($type as $key => $name) {
      if ($name['Available'] === 0) {
        unset($type[$key]);
      }
    }
    $dist = $config->get('District');
    foreach ($dist as $key => $name) {
      if ($name['Available'] === 0) {
        unset($dist[$key]);
      }
    }
    $typePrice = 0;

    foreach ($type as $key => $name) {
      $selectedValue = $form_state->getValue(['quantity', $key]);
      $typePrice += $selectedValue * $name['Price'];
    }

    $totalSum = $dist[$form_state->getValue('district')]['Price'] + $typePrice;

    $form['price']['#required'] = TRUE;
    $form['price']['#attributes'] = ['id' => 'edit-price', 'readonly' => 'readonly'];
    $form['price']['#value'] = $totalSum . ' ₽';

    $form_state->setValue('price', $totalSum);

    return $form['price'];
  }

  /**
   * @throws \Exception
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $info = $form_state->getUserInput();
    if (empty($form_state->getErrors())) {
      Drupal::logger('write_log')->notice(serialize($info));
      Drupal::messenger()->addMessage('Спасибо! Ваша пицца скоро будет доставлена');
    }
    else {
      Drupal::logger('write_log')->error(implode(PHP_EOL, $form_state->getErrors()));
    }
    $config = Drupal::config('pizza4.settings');
    $type = $config->get('Types');
    foreach ($type as $key => $name) {
      if ($name['Available'] === 0) {
        unset($type[$key]);
      }
    }

    $dist = $config->get('District');
    foreach ($dist as $key => $name) {
      if ($name['Available'] === 0) {
        unset($dist[$key]);
      }
    }

    $pizzaMail['#theme'] = 'pizza_mail';
    $pizzaMail['#total'] = 0;
    foreach ($form_state->cleanValues()->getValue('quantity') as $key => $value) {
      if ($value > 0) {
        $pizzaMail['#total'] += $type[$key]['Price'] * $value;
        $pizzaMail['#items'][] = ['name' => $type[$key]['Name'], 'qty' => $value, 'price' => $type[$key]['Price'], 'sum' => $type[$key]['Price'] * $value];
      }
    }
    if (($districtId = $form_state->cleanValues()->getValue('district')) && isset($dist[$districtId])) {
      $pizzaMail['#district'] = ['name' => $dist[$districtId]['name'], 'price' => $dist[$districtId]['Price']];
      $pizzaMail['#total'] += $dist[$districtId]['Price'];
    }

    $pizzaMail['#phone'] = $form_state->cleanValues()->getValue('phone');
    $pizzaMail['#address'] = $form_state->cleanValues()->getValue('address');

    $params['context']['from'] = Drupal::config('system.site')->get('mail');
    $params['context']['subject'] = 'pizza order';

    $mailManager = Drupal::service('plugin.manager.mail');
    $render = Drupal::service('renderer');

    $markup = $render->render($pizzaMail);;
    $params['context']['message'] = $markup;

    $to = User::load(1)->getEmail();
    $langcode = User::load(1)->getPreferredLangcode();

    $result = $mailManager->mail('custom_do_do', 'pizza', $to, $langcode, $params, NULL, TRUE);

    if ($result['result'] !== TRUE) {
      $message = t('There was a problem sending your email notification');
      Drupal::messenger()->addMessage($message, 'error');
      Drupal::logger('pizza')->error($message);
    }
    else {
      $message = t('An email notification has been sent');
      Drupal::messenger()->addMessage($message, 'status');
      Drupal::logger('pizza')->notice($message);
      Drupal::logger('pizza')->notice($params['context']['message']);
    }
  }

}
