<?php
namespace Server\Controller;
class Controller
{
    private $_name = null;
    public function getPersonName()
    {
        return $this->_name;
    }
    public function setPersonName($name)
    {
        $this->_name = $name;
    }
}
