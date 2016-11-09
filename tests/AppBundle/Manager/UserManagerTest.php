<?php

namespace AppBundle\Manager;

class UserManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function isInstantiable()
    {
        $manager = new UserManager();

        $this->assertInstanceOf(UserManager::class, $manager);
    }
}
