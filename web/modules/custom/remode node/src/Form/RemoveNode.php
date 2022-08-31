<?php

namespace Drupal\remove_node\src\Form;

use Drupal\Core\Entity\EntityStorageException;
use Drupal\Core\Form\BaseFormIdInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Drupal\node\NodeInterface;


/**
 * Defines a simple form for deleting node.
 */
class RemoveNode extends FormBase implements BaseFormIdInterface {

  /**
   * Node ID of product this form is attached to.
   *
   * @var string
   */
  protected $node_id;

  /**
   * Constructs a DeleteNode.
   *
   * @param string $nod_id
   *   The node ID.
   */
  public function __construct($nod_id) {
    $this->node_id = $nod_id;
  }


  public function getBaseFormId() {
    return 'delete_form';
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'delete_form_'.$this->node_id;
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, NodeInterface $node = NULL) {

    $form['node_id'] = [
      '#type' => 'value',
      '#value' => $node->id(),
    ];

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('remove'),
    ];


    return $form;

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    try {
      Node::load($form_state->getValue('node_id'))->delete();
      $this->redirect('<front>');
      \Drupal::messenger()->addMessage('Node is removed successfully');
    } catch (EntityStorageException $e) {
      \Drupal::messenger()->addError('This is error');
    }

  }

}
