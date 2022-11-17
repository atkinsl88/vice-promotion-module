<?php

namespace Drupal\vice_promotion_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Promo' Block.
 *
 * @Block(
 *   id = "promo_block",
 *   admin_label = @Translation("Promo block"),
 *   category = @Translation("Promotion"),
 * )
 */
class PromoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Promo!'),
    ];
  }

}