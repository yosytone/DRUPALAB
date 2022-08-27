<?php

namespace Drupal\cron_log_email\core;

/**
 * Implements hook_permission().
 */
//function cron_log_mail_permmission(){
//  return array(
//    'administr cron_log_mail.info'=>array(
//      'title'=>t('Administer cron_log_mail'),
//      'description'=>t('peform administration tasks for cron_log_mail.'),
//    ),
//  );
//}
///**
// * Implements hook_menu().
// */
//function cron_log_mail_menu(){
//  $items['admin/config/cron_log_mail']=array(
//    'title'=>'cron_log_mail Settings',
//     'type'=>MENU_NORNAL_ITEM,
//    'page callback'=> 'drupal_get_form',
//    'page arguments'=>array('cron_log_mail_admin_form'),
//    'access arguments'=>array('administr cron_log_mail'),
//  );
//  return $items;
//}
/**
 * Administration form for cron_log_mail
 *
 * @param $form
 * @param $form_state
 *
 * @return  $form
 */
function cron_log_mail_admin_form($form, &$form_state) {
  $form['cron_log_mail_enable'] = [
    '#type' => 'checkbox',
    '#title' => t('Enable cron_log_mail.'),
    '#default_value' => variable_get('cron_log_mail_enable', 0),
  ];
  $form['cron_log_mail_email_text'] = [
    '#title' => t('text to send with cron_log_mail Emails.'),
    '#type' => 'textarea',
    'description' => t('Enter some text to send with cron_log_mail  sms.'),
    '#default_value' => variable_get('cron_log_mail_email_text', ''),
  ];
  return system_settings_form($form);
}


function cron_log_mail_cron() {
  if (variable_get('cron_log_mail_enable', 0)) {
    //send cron_log_mail_email
    drupal_mail('cron_log_mail', 'cron_log_mail', 'albrol@mail.ru', language_default());
  }
}


function cron_log_mail($key, &$message, $params) {
  switch ($key) {
    case 'cron_log_mail_mail':
      $message['subject'] = t("this is a cron_log_mail report");
      $message['body'] [] = t('this a report from cron_log_mail on @site-name', ['@site-name' => variable_get('site_name', 'mail.ru')]);
      $message['body'] [] = t(variable_get('cron_log_mail_email_text', ""));
      break;
  }
}
