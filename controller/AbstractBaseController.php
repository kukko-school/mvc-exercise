<?php

require_once(__DIR__ . '/ControllerInterface.php');

abstract class AbstractBaseController implements ControllerInterface
{
    protected function view($viewName)
    {
        return file_get_contents(__DIR__ . '/../view/' . $viewName . '.html');
    }
}
