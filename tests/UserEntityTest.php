<?php
/**
 * Created by PhpStorm.
 * User: Brice
 * Date: 19/11/2018
 * Time: 14:31
 */

namespace App\Tests;


use App\Entity\User;
use PHPUnit\Framework\TestCase;


class UserEntityTest extends TestCase
{
    public $user;

    /**
     * UserEntityTest constructor.
     * @param $User
     */
    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
        $this->user->setEmail('foo.bar@baz.fr');
        $this->user->setPassword("password");
    }

    public function testGetEmail(){
        self::assertEquals($this->user->getEmail(),'foo.bar@baz.fr');
    }

    public function testPassword(){
        self::assertEquals($this->user->getPassword(),'password');
    }
}