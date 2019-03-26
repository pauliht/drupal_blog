<?php

namespace Drupal\current_user\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
 * )
 */
class HelloUser extends BlockBase{

  /**
   * {@inheritdoc}
   */
  
  public function build() {
    $user = \Drupal::currentUser()->getUsername();
    $logged_in = \Drupal::currentUser()->isAuthenticated();

    if (!$logged_in){  
      print "<div class='block__user'><p>Logged in as Anonymous</p></div>";
    } else {
      print "<div class='block__user'><p>Logged in as " . $user . "</p></div>"; 
    }
  }
}
?>
