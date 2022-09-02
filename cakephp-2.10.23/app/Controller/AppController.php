<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

      public $components = array('Session', 'Cookie', 'Auth');

      public function beforeFilter()
      {
            parent::beforeFilter();
      }
}