<?php

namespace Drupal\hello\Controller;

class HelloController {
  public function demo() {
    return array(
      '#markup' => t('Hello World!'),
    );
  }
}