<?php
class UsersController extends AppController {

      public function login() {
            // debug($this->Session->read('Auth,User,id'));
            debug($this->Auth->user('role'));
            // debug(AuthComponent::user('role'));
            if($this->request->is('post')){
                  if(!empty($this->request->data)){
                        if($this->Auth->login()){
                              
                        }         
                  }
            }    
      }
      
      public function logout() {

      }
}
// $this->User->save(array(
//       'username' => 'admin',
//       'password' => $this->Auth->password('admin')
// ));
// echo $this->Auth->password('admin');