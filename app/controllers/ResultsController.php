<?php

namespace app\controllers;

use app\models\Users;
/**
 * Description of Main
 *
 */

class ResultsController extends AppController {
    
//    public $layout = 'main';
    
    public function indexAction()
    {
    	$user = new Users;
    	$users = $user->findAll();
    	$this->set(compact('users'));

    }

    public function libAction() //repeat
    {
    	$user = new Users;
    	$users = $user->findAll();
    	$this->set(compact('users'));
  
    }
}