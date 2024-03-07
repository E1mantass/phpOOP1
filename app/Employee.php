<?php

abstract class Employee {
    protected $name;
    protected $position;
    protected $salary;

    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    // Abstraktus metodas
    abstract public function displayInfo();

    // Getteriai ir setteriai
    public function getName() {
        return $this->name;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

}