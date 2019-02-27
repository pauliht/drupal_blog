<?php
 
namespace Drupal\current_user\Controller;
 
class CurrentUserController {
    public function currentUser() {
        return array(
                '#title' => 'Current user logged in',
                '#markup' => \Drupal::currentUser()->id(),
            );
    }
    // protected function currentUser() {
    //     if (!$this->currentUser) {
    //       $this->currentUser = $this
    //         ->container()
    //         ->get('current_user');
    //     }
    //     return $this->currentUser;
    //   }
}