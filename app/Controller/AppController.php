<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
   /* function isAuthorized() {  
        
        //if the prefix is setup, make sure the prefix matches their role 
        if($this->Session->read('Auth.User.group_id') == 1){
                return true;
            }
            else{
               return false;   
            }
        //shouldn't get here, better be safe than sorry 
        
    } */
    public function beforeFilter() {
        if(!($this->params->controller == 'Users' && $this->action == 'login' || $this->params->controller == 'Users' && $this->action == 'salir'))
        {
            if($this->params->controller != 'Alumnos' && $this->Session->read('Auth.User.group_id') == 3)
            {
                $this->Session->setFlash('Usuario no autorizado!!!','msginfo');
                $this->redirect(array('controller' => 'Alumnos','action' => 'menualumnos'));
            }
        }
            
        //debug($this->params->controller);die;
    }
    
    public $components = array(        
        'Auth' => array(
            'authorize' => array('Controller') // Added this line
        ),
        'Session',
        'DebugKit.Toolbar'
    );
    
    public $helpers = array('Html', 'Form', 'Session');
    
    public function validar($modelo)
    {
        $devuelve = '';
        if($this->$modelo->validates())
            {
                $this->$modelo->set($this->request->data);
                $errores = $this->$modelo->invalidFields();
                if(!empty($errores))
                {
                        $devuelve = current(current($errores));
                }
            }
            else{
            }
            return $devuelve;
    }
    
}
