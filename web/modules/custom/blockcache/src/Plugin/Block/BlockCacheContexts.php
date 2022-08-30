<?php

namespace Drupal\blockcache_examples\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;

/**
 * Provides a Block
 *
 * @Block(
 *   id = "block_cache_contexts",
 *   admin_label = @Translation("Block caching with cache contexts"),
 * )
 */
class BlockCacheContexts extends BlockBase {
  /**
   * {@inheritdoc}
   */

  public function build() {

  /**
   * For variations, i.e. dependencies on the request context
   * If you'd like to make this work for anonymous users, disable
   * Internal page cache: https://www.drupal.org/docs/8/api/cache-api/cache-contexts#internal
   */
    $random_number = rand(1,5000);
    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->getString();

    $random_number = '<span class="badge">'.$random_number.'</span>';
    $output = $name . ' ' . $random_number;

    $request_time = \Drupal::time()->getCurrentTime();
    $date_output = date('d/m/Y', $request_time); 

    return array(
      '#markup' => $name .$date_output,
    );
  }

  /**
   * Example 1: per user: show username (but do not change)
   */
  public function getCacheContexts() {
    return ['user'];
  }

//  /**
//   * Example 2: per user: show username (but change number per url)
//   */
//  public function getCacheContexts() {
//    return ['user','url.path'];
//  }

  // https://www.drupal.org/docs/8/api/cache-api/cache-contexts#internal


}

