<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 13.05.15
 * Time: 14:28
 */

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class UsersFixture extends TestFixture {

    public $fields = array(
        'id' => array('type'=>'integer', 'key'=>'primary'),
        'email' => array('type' => 'string', 'length'=>128, 'null'=>false),
        'password' => array('type' => 'string', 'length'=>128, 'null'=>false),
        'created' => 'datetime',
        'modified' => 'datetime'
    );

    public $records = array(
        array(
            'id'=>1,
            'email'=>'test@test.com',
            'password'=>'$2y$10$S2NGGQ./D4hvpEvl0mfqQeS0H6CriZox/Nyiro4GULJZlE6lyKkOW',
            'created'=>'2012-07-04 10:41:23',
            'modified'=>'2012-07-04 10:43:31'
        )
    );
}