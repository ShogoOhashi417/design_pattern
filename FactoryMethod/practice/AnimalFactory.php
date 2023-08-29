<?php
require_once 'Animal.php';
require_once 'Human.php';
?>

<?php
class AnimalFactory {
    public function create($type) {
        $animal = $this->createAnimal($type);
        return $animal;
    }

    private function createAnimal($type) {
        if ($type == '人間') {
            return new Human();
        } else {
            return new Animal();
        }
    }
}