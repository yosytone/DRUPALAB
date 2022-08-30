<?php

namespace Drupal\user_clock\Controller;

use Drupal\Core\Controller\ControllerBase;

class UserClockController extends ControllerBase {

  

  public function hello() {

    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->value;

    $request_time = \Drupal::time()->getCurrentTime();
    $date_output = date('l, j F Y, H:i', $request_time); 

    return [
      '#markup' => "<p>".'hello, '.$name." "."</p><p>"." ".$date_output."</p>",
      '#content' => '<button>Большая красная кнопка</button>',
    ];
  }

}