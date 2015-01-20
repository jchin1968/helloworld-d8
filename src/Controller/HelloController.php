<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase{
  public function demo($name) {
    return array(
      '#markup' => $this->t('Hello @name!', [
        '@name' => $name,
      ]),
    );
  }
}