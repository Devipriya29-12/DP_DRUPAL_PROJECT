<?php

namespace Drupal\queue\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'QueueBlock' block.
 *
 * @Block(
 *  id = "queue_block",
 *  admin_label = @Translation("Queue block"),
 * )
 */
class QueueBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    ////$build = [];
    //$build['queue_block']['#markup'] = 'Implement MydataBlock.';

    $form = \Drupal::formBuilder()->getForm('Drupal\queue\Form\QueueForm');

    return $form;
  }

}