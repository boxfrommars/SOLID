<?php

interface Fingerprintable {
    public function getFingerprint();
}

interface Employee {
    function getSalary();
    function getTimetable();
}

interface Measurable {
    function getHeight();
    function getWidth();
    function getDepth();
    function getWeight();
}


class Human implements Measurable, Fingerprintable, Employee {
    public function getFingerprint()
    {
        // TODO: Implement getFingerprint() method.
    }

    function getSalary()
    {
        // TODO: Implement getSalary() method.
    }

    function getTimetable()
    {
        // TODO: Implement getTimetable() method.
    }

    function getHeight()
    {
        // TODO: Implement getHeight() method.
    }

    function getWidth()
    {
        // TODO: Implement getWidth() method.
    }

    function getDepth()
    {
        // TODO: Implement getDepth() method.
    }

    function getWeight()
    {
        // TODO: Implement getWeight() method.
    }
}


class FingerPrintScanner {
    public function log(Fingerprintable $fingerprintable) {
        // ...
    }

    public function check(Fingerprintable $fingerprintable){

    }
}

class Accountant {
    public function calculateSalary(Employee $employee) {
        // ...
    }
}

class Elevator {
    protected $_limitWeight = 500;

    /** @var Measurable[]  */
    protected $_content = array();

    function add(Measurable $obj) {
        $this->_content[] = $obj;
    }

    function checkWeight() {
        $currentWeight = 0;
        foreach ($this->_content as $obj) {
            $currentWeight += $obj->getWeight();
        }
        return $currentWeight <= $this->_limitWeight;
    }

    function move($floor) {
        if($this->checkWeight()) {
            // ..
        } else {
            // ALARM!!11
        }
    }
}