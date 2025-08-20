<?php

namespace Drupal\registration\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class RegistrationController.
 *
 * @package Drupal\registration\Controller
 */
class RegistrationController extends ControllerBase {

  /**
   * Display.
   *
   * @return string
   *   Return Hello string.
   */
  public function display() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('This page contain all inforamtion about my data ')
    ];
  }

}