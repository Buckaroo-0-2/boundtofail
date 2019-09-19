<?php

namespace Drupal\boundtofail\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Mobile Menu' Block.
 *
 * @Block(
 *   id = "mobile_menu",
 *   admin_label = @Translation("Mobile Menu"),
 *   category = @Translation("Menus"),
 * )
 */
class MobileMenu extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'mobile_menu_template',
      //'#test_var' => $this->t('Test Value'),
    ];
  }

}
