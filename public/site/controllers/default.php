<?php

return function($site, $pages, $page) {

   $form = uniform(
      'contact-form', 
      array(
         'required' => array(
            'name'  => 'name',
            '_from' => 'email'
            ),

         'actions'  => array(
            array(
               '_action' => 'email',
               'to'      => 'private@mail.tld',
               'sender'  => 'info@my-domain.tld',
            )
         )
      )
   );

   return compact('form');
};

?>