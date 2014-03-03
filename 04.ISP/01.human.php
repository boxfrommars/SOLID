<?php
interface HumanInterface {
    function getName();
    function getHeight();
    function getWeight();
    function getFingerprint();
    function getBloodPressure();
    function getEyeColor();
    function getSalary();
    // ...
}

class Human implements HumanInterface {
    function getName()
    {
        // TODO: Implement getName() method.
    }

    function getHeight()
    {
        // TODO: Implement getHeight() method.
    }

    function getWeight()
    {
        // TODO: Implement getWeight() method.
    }

    function getFingerprint()
    {
        // TODO: Implement getFingerprint() method.
    }

    function getBloodPressure()
    {
        // TODO: Implement getBloodPressure() method.
    }

    function getEyeColor()
    {
        // TODO: Implement getEyeColor() method.
    }

    function getSalary()
    {
        // TODO: Implement getSalary() method.
    }
}

class FingerPrintScanner {
    public function log(HumanInterface $human) {
        // ...
    }
}

class accountant {
    public function calculateSalary(HumanInterface $human) {
        // ...
    }
}