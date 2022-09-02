<?php

namespace Drupal\write_log\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\Checkboxes;


class WriteForm extends FormBase {

  public function getFormId() {
    return 'reservation_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['biography'] = [
      '#type' => 'textarea',
      '#title' => t(' Ваше сообщение'.$aaa),
      '#description' => t('Оставьте свое сообщение'),
    ];

    if (\Drupal::currentUser()->isAnonymous()) {
    

    $form['month'] = [
      '#type' => 'checkbox',
      '#tree' => TRUE,
      '#title' => $this->t('Анонимные пользователи могут указывать контактную информацию'),
      '#options' => [
        $this->t('January'),
        $this->t('February'),
      ],
      '#ajax' => [
        'callback' => [$this, 'extraField'],
        'event' => 'change',
        'wrapper' => 'week-day',
      ],
    ];

    // Disable caching on this form.
    $form_state->setCached(FALSE);

    $form['week_day'] = [
      '#type' => 'container',
      '#tree' => TRUE,
      '#attributes' => ['id' => 'week-day'],
    ];

    if ($form_state->getUserInput()['_triggering_element_name'] == 'month') {
      $month = $form_state->getValue('month');

      if ($month == '1') {

      $form['week_day']['email'] = [
        '#title' => 'Email',
        '#type' => 'email',
        '#tree' => TRUE,
        '#required' => TRUE,
        '#ajax' => [
          'event' => 'change',
          'progress' => array(
            'type' => 'throbber',
            'message' => t('Verifying email..'),
          ),
        ],
        '#suffix' => '<div class="email-validation-message"></div>'
      ];
 
      $form['week_day']['phone'] = [
        '#title' => 'Phone',
        '#type' => 'textfield',
        '#tree' => TRUE,
        '#required' => TRUE,
        '#ajax' => [
          'event' => 'change',
          'progress' => array(
            'type' => 'throbber',
            'message' => t('Verifying email..'),
          ),
        ],
        '#suffix' => '<div class="email-validation-message"></div>'
      ];

    }
  }
  }

    

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];


    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $info = $form_state->getUserInput();
    $i1 = $info['week_day']['email'];
    $phone = $info['week_day']['phone'];
    $month = $form_state->getValue('month');

    if ($month == '1') {
      $pattern_phone = '/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/';
      if (!preg_match($pattern_phone, $phone)){
        $form_state->setErrorByName('phone', $this->t('Формат ввода номера телефона не верен!'.$month));
      }
    }

    

  }


  public function submitForm(array &$form, FormStateInterface $form_state) {

    $bio = $form_state->getValue('biography');

    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->value;

    $info = $form_state->getUserInput();
    $i1 = $info['week_day']['email'];
    $i2 = $info['week_day']['phone'];

    //$pattern_phone = '^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$';
    //if (!preg_match($pattern_phone, $i2)){
      //$form_state->setErrorByName('email', $this->t('Формат ввода email не верен!'));
    //}


    $alrt = 'Спасибо за заполнение формы';
    
      if (empty($form_state->getErrors())) {
        \Drupal::messenger()->addMessage($alrt);
      } else {
        \Drupal::logger('write_log')
          ->error($form_state->getErrors());
      }
      
      $logger = \Drupal::service('logger.factory'); 
  
    
      if (empty($i2)) {
  
      // Log a message with dynamic variables.
      $nodeType = $bio;
      $userName = $name;
      $logger->get($moduleName)->notice('Сообщение: "@nodeType". Автор %userName.', [
        '@nodeType' => $nodeType,
        '%userName' => $userName,
      ]);
    }
    else {

      $nodeType = $bio;
      $email = $i1;
      $phone = $i2;

      $logger->get($moduleName)->notice('Анонимное сообщение: "@nodeType". Контактные данные: "@email", "@phone"', [
        '@nodeType' => $nodeType,
        '@email' => $email,
        '@phone' => $phone,
      ]);

    }

     
    

  }

  
  public function extraField(array &$form, FormStateInterface $form_state) {
    
    return $form['week_day'];
  }


  
}

