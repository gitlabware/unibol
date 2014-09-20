<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
 
class UsersController extends AppController
{
    public $layout = 'unibol';

    /**
     * index method
     *
     * @return void
     */
    var $components = array('Acl', 'Auth');
    public function login2()
    {
        if ($this->Session->read('Auth.User'))
        {
            $this->Session->setFlash('You are logged in!');
            $this->redirect('/', null, false);
        }
    }

    /*public function login()
    {
        $this->layout = 'login';
        if ($this->request->is('post'))
        {
            if ($this->Auth->login())
            {
                //$this->redirect($this->Auth->redirect());
                $this->redirect(array('controller'=>'principal', 'action'=>'index'));               
                
            } else
            {
                $this->Session->setFlash('Your username or password was incorrect.');
            }
        }
    }*/
    public function login() {
        $this->layout = 'login';
        
        if ($this->request->is('post')) {


            if ($this->Auth->login()) {
                //$this->redirect($this->Auth->redirect());
                $rol = $this->Session->read('Auth.User.group_id');
                $idalumno = $this->Session->read('Auth.User.id');
                switch ($rol){
                    case '1':$this->redirect(array('controller' => 'Principal', 'action' => 'admin'));
                        break;
                    case '2':$this->redirect(array('controller' => 'Docentes', 'action' => 'menudocentes'));
                        break;
                    case '3': $this->redirect(array('controller' => 'Alumnos', 'action' => 'menualumnos'));
                        break;
                    
                }
                
            } else {
                $this->Session->setFlash('Usuario o Password incorrectos.');
            }
        }
    }

    public function index()
    {
        $users = $this->User->find('all',array('conditions'=>array('group_id'=>1),'recursive'=>0));
        //debug($users);exit;
        $this->set(compact('users'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists())
        {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        
        if ($this->request->is('post'))
        {
            $this->User->create();
            //$this->request->data['User']['password'] = sha1($this->data['User']['password']);
            $valida = $this->validar('User');
            if(empty($valida))
            {
                $this->request->data['User']['group_id'] = 1;
                if ($this->User->save($this->request->data))
                {
                    $this->Session->setFlash('The user has been saved','msgbueno');
                    $this->redirect(array('action' => 'index'));
                } else
                {
                    $this->Session->setFlash('The user could not be saved. Please, try again.','msgerror');
                }
            }
            else{
                $this->Session->setFlash($valida,'msgerror');
            }
            
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }
    
    public function salir()
    {
        //$this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
        $this->redirect(array('action'=>'login'));
    }

    //esta funcion ejecuta llenado de aros_acos
    public function initDB()
    {
        $group = $this->User->Group;
        //Allow admins to everything
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');

        //allow managers to posts and widgets
        /* $group->id = 2;
          $this->Acl->deny($group, 'controllers');
          $this->Acl->allow($group, 'controllers/Posts');
          $this->Acl->allow($group, 'controllers/Widgets');

          //allow users to only add and edit on posts and widgets
          $group->id = 3;
          $this->Acl->deny($group, 'controllers');
          $this->Acl->allow($group, 'controllers/Posts/add');
          $this->Acl->allow($group, 'controllers/Posts/edit');
          $this->Acl->allow($group, 'controllers/Widgets/add');
          $this->Acl->allow($group, 'controllers/Widgets/edit'); */
        //we add an exit to avoid an ugly "missing views" error message
        echo "all done";
        exit;
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists())
        {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put'))
        {
            $valida = $this->validar('User');
            if(empty($valida))
            {
                if ($this->User->save($this->request->data))
                {
                    $this->Session->setFlash('The user has been saved','msgbueno');
                    $this->redirect(array('action' => 'index'));
                } else
                {
                    $this->Session->setFlash('The user could not be saved. Please, try again.','msgerror');
                }
            }
            else{
                $this->Session->setFlash($valida,'msgerror');
                $this->redirect(array('action' => 'index'));
            }
            
        } else
        {
            $this->request->data = $this->User->read(null, $id);
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists())
        {
            throw new NotFoundException(__('Usuario invalido'));
        }
        if ($this->User->delete())
        {
            $this->Session->setFlash(__('Usuario eliminado'), 'msgbueno');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('El usuario no se elemino'), 'msgalert');
        $this->redirect(array('action' => 'index'));
    }
    public function cambiopass($id=null, $sw = null){
        $this->User->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->User->read();
        } else {
            if ($this->User->save($this->data)) {
                $this->Session->setFlash('Su Password fue modificado Exitosamente');
                if ($sw == 1)
                {
                    $this->redirect(array('action' => 'index'), null, true);
                }
                if ($sw == 2)
                {
                    $this->redirect(array('controller'=>'Docentes','action' => 'index'), null, true);
                }
                if ($sw == 3)
                {
                    $this->redirect(array('controller'=>'Alumnos','action' => 'index'), null, true);
                }
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }

}
