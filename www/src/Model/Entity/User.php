<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 13.05.15
 * Time: 15:52
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class User extends Entity {
    protected $_accessible = [
        "*" => true
    ];

    protected function _setPassword($value){
        return (new DefaultPasswordHasher)->hash($value);
    }
}