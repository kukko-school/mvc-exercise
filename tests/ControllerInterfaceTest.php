<?php

use PHPUnit\Framework\TestCase;

final class ControllerInterfaceTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once(__DIR__ . '/../controller/ControllerInterface.php');
    }
    public function testInterfaceExists()
    {
        $this->assertTrue(interface_exists('ControllerInterface'));
    }
    /**
     * @depends testInterfaceExists
     */
    public function testRunMethodExists()
    {
        $this->assertTrue(method_exists(ControllerInterface::class, 'run'));
    }
}
