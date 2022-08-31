<?php

namespace Drupal\forma\Form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Form\FormBase;

use Drupal\Core\Form\FormStateInterface;

/**
 * 
 *
 * @see \Drupal\Core\Form\FormBase
 *
 */
class ExForm extends FormBase {

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Ваше имя'),
      '#description' => $this->t('Имя не должно содержать цифр'),
      '#required' => TRUE,
    ];
    $form['email'] = [
      '#type' => 'textfield',
      '#title' => t('Введите ваш e-mail'),
      '#description' => t('Ваш e-mail идет сюда'),
    ];
    $form['year'] = [
      '#type' => 'select',
      '#title' => t('Выберете ваш год рождения'),
      '#options' => [
        '1999',
        '2000',
        '2001',
        '2002',
        '2003',
        '2004',
        '2005',
        '2006',
        '2007',
        '2008',
        '2009',
        '2010',
        '2020',
      ],
    ];
    $form['gender'] = [
      '#type' => 'radios',
      '#title' => t('Пол'),
      '#options' => [t('M'), t('Ж')],
    ];
    $form['body'] = [
      '#type' => 'radios',
      '#title' => t('Кол-во конечностей'),
      '#options' => [t('4')],
    ];
    $form['super'] = [
      '#type' => 'select',
      '#multiple' => TRUE,
      '#title' => t('Выберете ваш супер способность'),
      '#options' => ['бессмертие', 'прохождение сквозь стены', 'левитация'],
    ];

    $form['biography'] = [
      '#type' => 'textarea',
      '#title' => t(' Ваша Биография'),
      '#description' => t('Вы можите писать ЗДЕСЬ!!!'),
    ];

    $form['contract'] = [
      '#type' => 'checkbox',
      '#title' => t('с контрактом ознакомлен'),
    ];

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];

    return $form;
  }

  public function getFormId() {
    return 'ex_form_exform_form';
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $name = $form_state->getValue('name');
    $is_number = preg_match("/[\d]+/", $name, $match);
    $email = $form_state->getValue('email');
    $is_email = preg_match("/[0-9a-z]+@[a-z]/", $email, $match);
    if ($is_number > 0) {
      $form_state->setErrorByName('title', $this->t('Строка содержит цифру.'));
    }
    if (!$is_email) {
      $form_state->setErrorByName('email', $this->t('Формат ввода email не верен!'));
    }
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
      $message = t('An email notification has been sent');
      \Drupal::messenger()->addMessage($message, 'status');
      \Drupal::logger('write_log')->notice($message);
      \Drupal::logger('write_log')->notice($params['context']['message']);
    }

  }


}




