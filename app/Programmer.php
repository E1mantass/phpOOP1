<?php

namespace OOP2;

class Programmer extends Employee {
    private $programmingLanguage;

    public function __construct($name, $position, $salary, $programmingLanguage) {
        parent::__construct($name, $position, $salary);
        $this->programmingLanguage = $programmingLanguage;
    }

    public function displayInfo() {
        echo "Programuotojo informacija: {$this->name}, {$this->position}, {$this->salary}, {$this->programmingLanguage}<br>";
    }
}