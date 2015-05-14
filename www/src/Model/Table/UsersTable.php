<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 13.05.15
 * Time: 15:08
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table {

    public function validationDefault(Validator $validator){
        return $validator
            ->notEmpty('email', 'Email is required')
            ->notEmpty('password', 'A password is required')
            ->add('email', [
                'unique' => ['rule' => 'validateUnique', 'provider'=>'table']
            ]);
    }
}