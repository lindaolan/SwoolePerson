<?php
namespace Person;

class Person
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
