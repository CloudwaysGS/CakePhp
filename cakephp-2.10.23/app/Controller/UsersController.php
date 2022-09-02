<?php
class UsersController extends AppController {

      public function login() {
            if(!empty($this->request->data)){
                  if($this->request->is('post')){
                        if($this->Auth->login()){  
                              return $this->redirect('/links/add');
                        }
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