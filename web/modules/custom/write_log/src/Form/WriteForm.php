<?php

namespace Drupal\write_log\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\Checkboxes;


class WriteForm extends FormBase {

    protected $values = [
        'checkboxes' => [
            '0' => 'checkbox1',
        ],
    ];

  

    public function getFormId() {
        return 'drupal_miseries_checkboxesajax';
    }

    public function checkboxesAjaxCallback(array &$form, FormStateInterface $form_state) {

      $checkbox = $form_state->getTriggeringElement();

      $select = $form_state->getValue('select');

      
      
      if($checkbox) {

      $form['anon']['email'] = [
        '#title' => 'Email',
        '#type' => 'email',
        '#required' => TRUE,
        '#ajax' => [
          'callback' => '::validateEmailAjax',
          'event' => 'change',
          'progress' => array(
            'type' => 'throbber',
            'message' => t('Verifying email..'),
          ),
        ],
        '#suffix' => '<div class="email-validation-message"></div>'
      ];

      $form['anon']['phone'] = [
        '#title' => 'phone',
        '#type' => 'textfield',
        '#required' => TRUE,
        '#ajax' => [
          'callback' => '::validateEmailAjax',
          'event' => 'change',
          'progress' => array(
            'type' => 'throbber',
            'message' => t('Verifying email..'),
          ),
        ],
        '#suffix' => '<div class="email-validation-message"></div>'
      ];
    }
      return $form['anon'];
    }
    
    public function buildForm(array $form, FormStateInterface $form_state) {


      $aaa = strlen($form_state->getValue('phone'));

      $form['biography'] = [
        '#type' => 'textarea',
        '#title' => t(' Ваша Биография'.$aaa),
        '#description' => t('Вы можите писать ЗДЕСЬ!!!'),
      ];
  
    
        $form['checkboxes'] = [
            '#type' => 'checkboxes',
            '#title' => $this->t('Анонимные пользователи могут указывать контактную информацию',

              [ '@select' => empty($form_state->getValues()) ? 
                  $this->values['select'][key($this->values['select'])] : $form_state->getValue('select') 
              ]
                ),
                
            '#options' => $this->values['checkboxes'],
            '#default_value' => false,
            '#ajax' => [
                'callback' => [$this, 'checkboxesAjaxCallback'],
                'wrapper' => 'status',
            ],
        ];
        
        $form['status'] = [
            '#type' => 'container',
            '#attributes' => ['id' => 'status'],
        ];

        $form['submit'] = [
          "#type" => "submit",
          '#value' => $this->t('Отправить'),
        ];

        return $form;
    }

    /**
      * {@inheritdoc}
      */
    public function validateEmailAjax(array &$form, FormStateInterface $form_state) {
      $response = new AjaxResponse();
      
      if (strlen($form_state->getValue('phone')) >3) {

        $response->addCommand(new HtmlCommand('.email-validation-message', 'This provider can lost our mail. Be care!'));
      }
      else {
        # Убираем ошибку если она была и пользователь изменил почтовый адрес.
        $response->addCommand(new HtmlCommand('.email-validation-message', ''));
      }
      return $response;
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
      $info = $form_state->getUserInput();
      if (empty($form_state->getErrors())) {
        \Drupal::logger('write_log')
          ->notice(serialize($info));
        \Drupal::messenger()->addMessage('Спасибо за заполнение формы');
      } else {
        \Drupal::logger('write_log')
          ->error($form_state->getErrors());
      }
      $key = 'admin_mail';
      $to = \Drupal\user\Entity\User::load(1)->getEmail();
      $langcode = 'ru';
      $user_name= $form_state->getValue('name');
      $user_mail= $form_state->getValue('email');
      $mailManager = \Drupal::service('plugin.manager.mail');
      $params = [];
      $params['context']['from'] = \Drupal::config('system.site')->get('mail');
      $params['context']['subject'] = 'superpowers form';
      $params['context']['message'] ="this user has filled out a form \r\n user name is $user_name\r\n user_mail is $user_mail";
      $send = true;
      $result = $mailManager->mail('system', $key, $to, $langcode, $params, NULL, $send);
      if ($result['result'] !== true) {
        $message = t('There was a problem sending your email notification');
        \Drupal::messenger()->addMessage($message, 'error');
        \Drupal::logger('write_log')->error($message);
      } else {


        $aaa = strlen($form_state->getValue('biography'));
        
        $message = t('An email notification has been sent'.$a);
        \Drupal::messenger()->addMessage($message, 'status');
        \Drupal::logger('write_log')->notice($message);
        \Drupal::logger('write_log')->notice($params['context']['message']);
      }
    }
}

