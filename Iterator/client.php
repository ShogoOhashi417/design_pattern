<?php
require_once 'Employee.php';
require_once 'Employees.php';
require_once 'SalesmanIterator.php';
?>

<?php
$employees = new Employees();
$employees->add('大橋', new Employee('sohashi', 32, 'DEV'));
$employees->add('堺', new Employee('msakai', 32, 'CS'));
$employees->add('緒方', new Employee('JET', 32, 'DEV'));
$employees->add('佐々木', new Employee('msasaki', 32, 'Sales'));

$iterator = $employees->getIterator();

while ($iterator->valid()) {
    $employee = $iterator->current();
// var_dump($employee);

    echo $employee->getName() . PHP_EOL;
    echo $employee->getAge() . PHP_EOL;
    echo $employee->getJob() . PHP_EOL;
    echo PHP_EOL;

    $iterator->next();
}



dumpWithForeach(new SalemanIterator($iterator));

?>

<?php
function dumpWithForeach($iterator) {
    foreach ($iterator as $employee) {
        echo $employee->getName() . PHP_EOL;
        echo $employee->getAge() . PHP_EOL;
        echo $employee->getJob() . PHP_EOL;
        echo PHP_EOL;
    }
}

?>
