<?php

namespace Drupal\vice_promotion\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Drupal block
 * @Block(
 *  id = "promo_block",
 *  admin_label = @Translation("Promo Block"),
 *  category = @Translation("Custom Plugin Block"),
 * )
 */

class VicePromoBlock extends BlockBase {

  /**
  * {@inheritdoc} 
  */   
  public function build() {
    return [
      '#content' => $this->getRandomQuote(),
      '#theme' => 'promo_block',
      '#cache' => [
        'max-age' => 0,
      ]
    ];
  }

  /**
   * Random quotes function and array.
  */
  private function getRandomQuote() {
    $quotes = [
      '3 months free',
      '6 months free',
      '£15 off',
      'Win a holiday',
    ];
    return $quotes[array_rand($quotes)];
  }

}