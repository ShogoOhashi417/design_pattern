<?php
require_once 'AnimalFactory.php';
?>

<?php
$type = '犬';

$animal_factory = new AnimalFactory();
$animal = $animal_factory->create($type);
$animal->speak();