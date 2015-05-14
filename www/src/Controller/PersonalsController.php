<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 13.05.15
 * Time: 17:28
 */

namespace App\Controller;

use App\Controller\AppController;

class PersonalsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    public function index() {
        $personals = $this->Personals->find('all')
            ->where(['Personals.user_id =' => $this->Auth->user('id')]);

        $this->set(['personals' => $personals]);
    }

    public function add() {
        $personal = $this->Personals->newEntity();
        if($this->request->is('post')){
            $personal->user_id = $this->Auth->user('id');
            $personal = $this->Personals->patchEntity($personal, $this->request->data);
            if($this->Personals->save($personal)){
                $this->Flash->success(__('Your personal data has been saved.'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Unable to add new personal data.'));
        }
        $this->set('personal', $personal);
    }

    public function edit($id = null) {
        $personal = $this->Personals->get($id);
        if($this->request->is(['post','put'])){
            $this->Personals->patchEntity($personal, $this->request->data);
            if($this->Personals->save($personal)){
                $this->Flash->success(__('Personal data has been updated'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Unable to update your personal data.'));
        }

        $this->set('personal', $personal);
    }
}