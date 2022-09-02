<?php
class Link extends AppModel{

      public $validate = array(
            // 'url' => 'url'
            // 2eme methode
            'url' => array (
                  'isEmpty' => array(
                        'rule'    => 'notEmpty',
                        'message' => 'Vous devez rentrer une URL'
                  ),
                  'isURL' => array(
                  'rule'      => 'url',
                  'required'  => true,
                  'allowEmpty'=> false,
                  'message'   => 'Votre url n\'est pas valide'
                  )
                  )
            // 'url' => array(
            //       'rule' => 'noGrafikart'
            // )
      );
      // public function noGrafikart($check){
      //       return !strpos($check['url'], 'grafikart.fr');
      // }
}