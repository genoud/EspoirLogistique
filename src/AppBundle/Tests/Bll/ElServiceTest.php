<?php
namespace AppBundle\Tests\Bll;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use AppBundle\Bll\ElService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Description of ElServiceTest
 *
 * @author magloire
 */
class ElServiceTest extends WebTestCase{
    private $doctrine;

    public function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->doctrine = static::$kernel->getContainer()->get('doctrine');
    }
    public function testFirst(){
        $this["assertTrue"](true);
        return "First";
    }
    public function testSecond(){
        $this->assertTrue(false);
        return "Second";
    }
    /**
     * @depends testFirst
     * @depends testSecond
     */
    public function testConsumer(){
        $this->assertEquals(array('First','Second'), func_get_args());
    }
    public function testGetPrivilegeManager(){
        $service=new ElService($this->doctrine);
        $manager=$service->getPrivilegeManager();
        $this->assertTrue($manager!=null);
    }
}
