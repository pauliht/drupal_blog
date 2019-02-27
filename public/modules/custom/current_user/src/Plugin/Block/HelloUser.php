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
      print "<h2>You are logged in as Anonymous</h2>";
    } else {
      print "<h1>You are logged in as " . $user . "</h1>"; 
    }
  }
}




// $current_user =  \Drupal::currentUser()->id();
    
// print "Current user logged in: $current_user";



// return array (
//   '#title' => 'Logged in as:',
//   '#markup' => $user,

?>
