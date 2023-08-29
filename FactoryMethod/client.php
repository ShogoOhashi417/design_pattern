<?php
require_once 'ReaderFactory.php';
?>

<?php
$file_name = 'test.xml';
$factory = new ReaderFactory();
$data = $factory->create($file_name);

$data->read();
$data->display();