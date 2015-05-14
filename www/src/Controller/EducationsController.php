<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 14.05.15
 * Time: 09:21
 */

namespace App\Controller;

use App\Controller\AppController;

class EducationsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    public function index(){
        $educations = $this->Educations->find('all')
        ->where(['Educations.user_id ='=>$this->Auth->user('id')]);
        $this->set('educations', $educations);
    }

    public function add() {
        $education = $this->Educations->newEntity();

        if($this->request->is('post')){
            $education->user_id = $this->Auth->user('id');
            $education = $this->Educations->patchEntity($education, $this->request->data);
            if($this->Educations->save($education)) {
                $this->Flash->success(__('School added successfully'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Could not save school.'));
        }

        $this->set('education', $education);
    }

    public function edit($id=null){
        $education = $this->Educations->get($id);

        if($this->request->is(['post', 'put'])){
            $education = $this->Educations->patchEntity($education,$this->request->data);
            if($this->Educations->save($education)){
                $this->Flash->success(__('Education entry updated successfully.'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Could not edit...'));
        }

        $this->set('education', $education);
    }

    public function delete($id=null){
        $this->request->allowMethod(['post', 'delete']);
        $education = $this->Educations->get($id);
        if($this->Educations->delete($education)){
            $this->Flash->success(__('Education entry deleted!'));
            $this->redirect(['action'=>'index']);
        }

    }
}