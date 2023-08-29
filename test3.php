<?php
interface Animal {
    public function speak();
    public function walk(); 
}

class Dog implements Animal {
    public function speak()
    {
        echo '話す';
    }

    public function walk()
    {
        echo '歩く';
    }

    public function run() {
        echo '走る';
    }
}

$dog = new Dog();
$dog->run();

class Tarosa extends Dog {
    public function ear() {
        echo '耳を垂れる';
    }
}

$tarosa = new Tarosa();
$tarosa->ear();
$tarosa->run();