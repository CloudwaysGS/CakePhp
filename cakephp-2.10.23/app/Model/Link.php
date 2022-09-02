<?php
class Link extends AppModel{

      public $validate = array(
            'url' => array(
                  'rule' => 'noGrafikart'
            )

            
            // 'url' => 'url'
            // 2eme methode
            // 'url' => array (
            //       'isEmpty' => array(
            //             'rule'    => 'notEmpty',
            //             'message' => 'Vous devez rentrer une URL'
            //       ),
            //       'isURL' => array(
            //       'rule'      => 'url',
            //       'required'  => true,
            //       'allowEmpty'=> false,
            //       'message'   => 'Votre url n\'est pas valide'
            //       )
            // )
      );
      public function noGrafikart($check){
                  
      }
}