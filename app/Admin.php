<?php

namespace OOP2;

class Admin extends Employee {
    private $department;
    
    public function __construct($name, $position, $salary, $department) {
        parent::__construct($name, $position, $salary);
        $this->department = $department;
    }

    public function displayInfo() {
        echo "Administracinio darbuotojo informacija: {$this->name}, {$this->position}, {$this->salary}, {$this->department}<br>";
    }
}