<?php
class Person {
    private $weight;
    private $height;

    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getHeight() {
        return $this->height;
    }
}

class HealthCheck {
    // public function calcurateBMI(Person $person) {
    public function calcurateBMI($weight, $height) {
        $person = new Person($weight, $height);
        return $person->getWeight()/pow($person->getHeight(), 2);
    }
}

$health_check = new HealthCheck();
// $result = $health_check->calcurateBMI(new Person(80, 1.8));
$result = $health_check->calcurateBMI(80, 1.8);
print($result);