<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 13.05.15
 * Time: 15:07
 */

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

class UsersController extends AppController {

    public function index() {
        $this->set('users', $this->Users->find('all'));
    }

    public function beforeFilter(Event $evt) {
        $this->Auth->allow(['add']);
    }

    public function add() {
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action'=>'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }

        $this->set('user', $user);
    }

    public function login() {
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    public function logout() {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
}