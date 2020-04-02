<?php

require_once(__DIR__ . '/ControllerInterface.php');

abstract class AbstractBaseController implements ControllerInterface
{
    protected function view($viewName, $parameters = [])
    {
        $html = file_get_contents(__DIR__ . '/../view/' . $viewName . '.html');
        foreach ($parameters as $key => $parameter){
            $html = str_replace('{{'.$key.'}}', $parameter, $html);
        }
        return $html;
    }
}
