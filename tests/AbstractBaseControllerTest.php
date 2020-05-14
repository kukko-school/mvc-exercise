<?php

use PHPUnit\Framework\TestCase;

class AbstractBaseControllerTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once(__DIR__ . '/../controller/AbstractBaseController.php');
    }
    public function testClassExists(){
        $this->assertTrue(class_exists('AbstractBaseController'));
    }
    /**
     * @depends testClassExists
     */
    public function testViewMethodExists()
    {
        $this->assertTrue(method_exists(AbstractBaseController::class, 'view'));
    }
    /**
     * @depends testClassExists
     */
    public function testRunMethodExists()
    {
        $this->assertTrue(method_exists(AbstractBaseController::class, 'run'));
    }
    /**
     * @depends testClassExists
     */
    public function testImplementedInterfaces()
    {
        $this->assertEquals(class_implements(AbstractBaseController::class), [
            'ControllerInterface' => 'ControllerInterface'
        ]);
    }
}
