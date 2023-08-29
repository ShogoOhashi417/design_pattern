<?php
class superclass {
    protected $name;
    protected $age;

    // public function __construct($name, $age)
    // {
    //     $this->name = $name;
    //     $this->age = $age;
    // }

    public function selfIntroduce($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo '私の名前は' . $this->name . 'です。' . $this->age . '歳です。' . PHP_EOL;
    }
}

class subClass extends superclass {
    protected $name;
    protected $age;

    // public function __construct($name, $age)
    // {
    //     $this->nam = $name;
    //     $this->ag = $age;
    // }

    public function introduce($name, $age) {
        echo '私の名前は' . $this->name . 'です。' . $this->age . '歳です。' . PHP_EOL;
        echo 'あなたの名前は' . $name . 'です。' . $age . '歳です。' . PHP_EOL;
    }
}

$superclass = new superclass();
// $superclass->selfIntroduce('大橋', 27);

$subclass = new subClass();
$subclass->selfIntroduce('Ohashi', 18);
$subclass->Introduce('大橋', 27);
