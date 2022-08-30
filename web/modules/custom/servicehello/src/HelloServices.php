<?php

/**
* @file providing the service that say hello world and hello 'given name'.
*
*/

namespace  Drupal\drupalup_service;

class HelloServices {

 protected $say_output;

 //public function __construct() {
   //$this->say_something = 'Hello World!';
 //}

 public function  sayHello(){
 
    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->value;

    $request_time = \Drupal::time()->getCurrentTime();
    $date_output = date('d/m/Y', $request_time); 

    $say_output = "Hello, ".$name." ".$date_output;

     return $say_output;
  }
 

}