<?php


/**
 * Implements hook_node_view_alter().
 */
function remove_node_node_view_alter(array &$build, Drupal\Core\Entity\EntityInterface $entity, \Drupal\Core\Entity\Display\EntityViewDisplayInterface $display) {

  if (in_array('administrator', Drupal::currentUser()->getRoles()) && $entity->isPromoted() && $build['#view_mode'] == 'teaser') {

    $form_obj = new \Drupal\remove_node\src\Form\RemoveNode($entity->id());
    $form = Drupal::formBuilder()->getForm($form_obj, $entity);

    $build['form'] = $form;
    
    $build['form']['#weight'] = -10;

  }

}
