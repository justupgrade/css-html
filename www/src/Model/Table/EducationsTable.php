<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 14.05.15
 * Time: 09:38
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class EducationsTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', ['foreignKey'=>'user_id']);
    }

    public function validationDefault(Validator $validator){
        return $validator
            ->notEmpty('start', 'Start date of education is required.')
            ->notEmpty('finish', 'Finish date of education is required.')
            ->notEmpty('name', 'School name is required.');
    }
}