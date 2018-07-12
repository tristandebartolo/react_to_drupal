<?php

/**
 * @file
 * Contains \Drupal\react_to_drupal\Plugin\Block\ReactBlock.
 */

namespace Drupal\react_to_drupal\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block for ReactJs.
 *
 * @Block(
 *   id = "react_to_drupal_block",
 *   admin_label = @Translation("React Block")
 * )
 */
class ReactBlock extends BlockBase {

  public function build() {
    return [
      'name' => [
        '#markup' => '<div id="app"></div>',
      ],
      '#attached' => [
        'library' => [
          'react_to_drupal/react',
        ],
      ],
    ];
  }
  
}