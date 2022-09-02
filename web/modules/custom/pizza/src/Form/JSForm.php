<?php

namespace Drupal\pizza\Form;

use Drupal;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class JSForm extends FormBase {



  public function __construct() {

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
    $config = Drupal::config('infopizza.settings');

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
        '#title' => $name['Name'] . '. Цена за одну пиццу: ' . $name['Price'],
        '#type' => 'select',
        '#options' => range(0, $name['Available']),
      ];
    }

    $dist = $config->get('Area');
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

    $form['#attached']['library'][] = 'pizza/pizzaJS';
    $form['#attached']['drupalSettings']['pizza']['distPrice'] = $dist;
    $form['#attached']['drupalSettings']['pizza']['typePrice'] = $type;
    $form['#attached']['drupalSettings']['pizza']['priceSuffix'] = ' ₽';
    $form['#attached']['drupalSettings']['pizza']['formNameId'] = '#pizza-form';

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


  }

}
