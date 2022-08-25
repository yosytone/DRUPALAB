<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyModuleController extends ControllerBase {

  

  public function hello() {

    $output = array();
    $output['#title'] = 'HelloWorldddd page title';    
    $output['#markup'] = 'Hello World!';

    return $output;
  }

}