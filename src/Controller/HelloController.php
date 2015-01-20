<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase{
  public function demo($name, $count) {
    return array(
      '#theme' => 'hello',
      '#name' => $name,
      '#count' => $count,
      '#attached' => [
        'library' => ['hello/cool-style'],
      ]
    );
  }
}