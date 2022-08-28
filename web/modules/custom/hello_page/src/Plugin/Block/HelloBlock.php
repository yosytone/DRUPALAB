<?php

namespace Drupal\hello_page\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class HelloPageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}