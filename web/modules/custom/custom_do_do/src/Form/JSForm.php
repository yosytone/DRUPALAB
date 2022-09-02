<?php

namespace Drupal\custom_do_do\Form;

use Drupal;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Renderer;
use Drupal\user\Entity\User;
use Drupal\Core\Mail\MailManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class JSForm extends FormBase {

  private  $mailManager;

  private  $markup;

  public function __construct(MailManagerInterface $mailManager, Renderer $markup) {
    $this->mailManager = $mailManager;
    $this->markup = $markup;
  }

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
    return 'pizza_form';
  }

  public static function create(ContainerInterface $container) {
    /**
     * @var MailManagerInterface $mailManager
     * @var Renderer $renderer
     */
    $mailManager = $container->get('plugin.manager.mail');
    $renderer = $container->get('renderer');
    return new static($mailManager, $renderer);
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
    $config = Drupal::config('pizza9.settings');

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
      '#title' => 'Ваш район',
      '#type' => 'radios',
      '#options' => array_combine(array_keys($dist), array_column($dist, 'name')),
      '#required' => TRUE,
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
      '#title' => 'Цена',
      '#attributes' => ['readonly' => 'readonly'],
      '#required' => TRUE,
    ];

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];

    $form['#attached']['library'][] = 'custom_do_do/custom_do_doJS';
    $form['#attached']['drupalSettings']['custom_do_do']['distPrice'] = $dist;
    $form['#attached']['drupalSettings']['custom_do_do']['typePrice'] = $type;
    $form['#attached']['drupalSettings']['custom_do_do']['priceSuffix'] = ' ₽';
    $form['#attached']['drupalSettings']['custom_do_do']['formNameId'] = '#pizza-form';

    return $form;
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

    
    $markup = $this->markup->render($pizzaMail);;
    $params['context']['message'] = $markup;

    $to = User::load(1)->getEmail();
    $langcode = User::load(1)->getPreferredLangcode();

    $result = $this->mailManager->mail('custom_do_do', 'pizza', $to, $langcode, $params, NULL, TRUE);

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
