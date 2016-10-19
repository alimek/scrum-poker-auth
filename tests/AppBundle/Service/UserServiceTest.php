<?php

namespace AppBundle\Service;

class UserServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_instantiable()
    {
        $instance = new UserService();

        $this->assertInstanceOf(UserService::class, $instance);
    }
}
