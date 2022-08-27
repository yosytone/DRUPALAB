<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->value;

    $request_time = \Drupal::time()->getCurrentTime();
    $date_output = date('d/m/Y', $request_time); 

    $service = \Drupal::service('drupalup_service.cow')->sayHello();

    return [
      '#markup' => $service,
    ];
  }

}

