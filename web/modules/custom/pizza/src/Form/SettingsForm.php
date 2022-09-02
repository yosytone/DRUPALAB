<?php

namespace Drupal\pizza\Form;

use Drupal\contact\Entity\Message;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'infopizza.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'example_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {


    $config = $this->config(static::SETTINGS);

    $avail = array_column($config->get('Area'), 'Available');
    for ($i = 0; $i < count($avail); $i++)
      if ($avail[$i] === 0)
        $avail[$i] = '-1';

    $form['places'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Доступные районы'),
      '#default_value' =>  $avail,
      '#options' => array_column($config->get('Area'), 'name'),
    ];

    $form['places_price'] = [
      '#title' => 'Цена доставки в район',
      '#type' => 'fieldset',
      '#tree' => TRUE
    ];

    $district = $config->get('Area');
    for ($i = 0; $i<count($district); $i++){
      $form['places_price'][$i] = [
        '#attributes' => [
          ' type' => 'number', // insert space before attribute name :)
        ],
        '#type' => 'textfield',
        '#title' => array_column($district, 'name')[$i],
        '#default_value' => array_column($district, 'Price')[$i]
      ];
    }
    
    ///////////////////////

    $types = $config->get('Types');
    $avail = array_column($config->get('Types'), 'Available');
    for ($i = 0; $i < count($avail); $i++)
      if ($avail[$i] === 0)
        $avail[$i] = '-1';

    $form['pizzas'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Пиццы'),
      '#default_value' =>  $avail,
      '#options' => array_column($types, 'Name'),
    ];

    $form['pizzas_price'] = [
      '#type' => 'fieldset',
      '#tree' => TRUE,
      '#title' => 'Цены'
    ];
    for ($i = 0; $i<count($types); $i++){
      $form['pizzas_price'][$i] = [
        '#attributes' => [
          ' type' => 'number',
        ],
        '#type' => 'textfield',
        '#title' => 'Цена ' . array_column($types, 'Name')[$i],
        '#default_value' => array_column($types, 'Price')[$i]
      ];
    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->config(static::SETTINGS);

    for ($i = 0; $i < count($form_state->getValue('places')); $i++){
      $dist = $config->get('Area' . ($i+1));

      $dist_data = [
        'name' => $dist['name'],
        'Available' => $form_state->getValue('places')[$i],
        'Price' => $form_state->getValue(['places_price', $i])
      ];
      $this->configFactory->getEditable(static::SETTINGS)
        ->set('Area.' . ($i+1), $dist_data)

        ->save();
    }
    
    for ($i = 0; $i < count($form_state->getValue('pizzas')); $i++){
      $type = $config->get('Types.' . ($i+1));
      $type_data = [
        'Name' => $type['Name'],
        'Available' => '10',
        'Price' => $form_state->getValue(['pizzas_price', $i])
      ];
      $this->configFactory->getEditable(static::SETTINGS)
        ->set('Types.' . ($i+1), $type_data)
        ->save();
    }

    parent::submitForm($form, $form_state);
  }

}
