<?php
class LinksController extends AppController{

      public function isAuthorized($user = null){
            parent::isAuthorized($user);
            return $user['role'] == 'admin';
      }

      function beforeFilter()
      {
            parent::beforeFilter(); 
            $this->Security->requirePost('login');
      }

      public function add(){
            if($this->request->is('post')){
                  $link = $this->Link->findByUrl($this->request->data['Link']['url']);
                  if(empty($link)){
                        $this->Link->create($this->request->data, true);
                        // $validator = $this->Link->validator();
                        // $validator->getField('url')->getRule('isURL', array());
                        // $validator->remove('url', 'isEmpty');
                        // unset($validator['url']);
                        
                        if($this->Link->save(null, true, array('url'))){
                              $id=$this->Link->id;
                              $this->set(compact('id'));
                              $this->render('add-success');
                        }
                  }else{
                        $id = $link['Link']['id'];
                        $this->set(compact('id'));
                        $this->render('add-success');
                        // die("j ai trouvé le lien");
                  }
                  // $this->set('id', $id);
            }
      }

      public function view($id){
            debug($this->request);
            die();
            $link = $this->Link->findById($id);
            if(empty($link)){
                  throw new NotFoundException();
            }
            return $this->redirect($link['Link']['url'], 301);
      }

      public function admin_index(){
            $links = $this->Link->find('all');
            $this->set(compact('links'));
      }

}