<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 13.05.15
 * Time: 17:20
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PersonalsTable extends Table {

    public function initialize(array $config){
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users', ['foreignKey'=>'user_id']);
    }

    public function validationDefault(Validator $validator){
        return $validator
            ->notEmpty('first_name', 'First name is required');
    }
}