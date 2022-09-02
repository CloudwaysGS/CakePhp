<?php
class UsersController extends AppController {

      public function login() {

            debug($this->Session->read());
            // debug($this->Auth->user('role'));
            // debug(AuthComponent::user('role'));
            // debug(AuthComponent::user('id'));
            // debug($this->Session->read());
            if(!empty($this->request->data)){
                        if($this->Auth->login()){  
                              // die('logged'); 
                        }         
                  }   
      }
      
      public function logout() {
            $this->Auth->logout();
            return $this->redirect('/');
      }
}
// $this->User->save(array(
//       'username' => 'admin',
//       'password' => $this->Auth->password('admin')
// ));
// echo $this->Auth->password('admin');