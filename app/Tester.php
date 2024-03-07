<?php

namespace OOP2;

class Tester extends Employee {
    private $testingTool;

    public function __construct($name, $position, $salary, $testingTool) {
        parent::__construct($name, $position, $salary);
        $this->testingTool = $testingTool;
    }

    public function displayInfo() {
        echo "Testuotojo informacija: {$this->name}, {$this->position}, {$this->salary}, {$this->testingTool}<br>";
    }
}