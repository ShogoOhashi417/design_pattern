<?php
require_once 'Group.php';
require_once 'Employee.php';
?>

<?php
$root_entry = new Group("001", "本社");
$root_entry->add(new Employee("00101", "CEO"));
$root_entry->add(new Employee("00102", "CTO"));

$group1 = new Group("010", "京都市社");
$group2 = new Group("110", "神戸営業所");

$group1->add(new Employee("01001", "支店長"));
$group2->add(new Employee("01002", "佐々木"));
$group1->add(new Employee("01003", "吉田"));

$group2->add(new Employee("11001", "河村"));
// $group1->add($group2);
$root_entry->add($group2);
$root_entry->add($group1);

$root_entry->dump();