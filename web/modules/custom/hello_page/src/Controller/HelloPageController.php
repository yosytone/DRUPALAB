<?php

namespace Drupal\hello_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloPageController extends ControllerBase {

  public function helloUID() {

    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->value;

    return [
      '#markup' => 'Hello, World!,'.$name,
    ];

    return $output;
  }

  public function hello() {

    $output = array();
    $output['#title'] = 'Hello World!';    
    $output['#markup'] = 'on this page';

    return $output;
  }

}
