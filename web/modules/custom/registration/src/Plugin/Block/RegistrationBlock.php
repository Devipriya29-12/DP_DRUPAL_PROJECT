<?php

namespace Drupal\registration\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'RegistrationBlock' block.
 *
 * @Block(
 *  id = "registration_block",
 *  admin_label = @Translation("Registration block"),
 * )
 */
class RegistrationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // $build = [];
    // $build['registration_block']['#markup'] = 'Implement MydataBlock.';

     $form = \Drupal::formBuilder()->getForm('Drupal\registration\Form\RegistrationForm');

    return $form;
  }

}