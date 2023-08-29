<?php
require_once 'Employee.php';
?>

<?php
class Employees implements IteratorAggregate {
    private $employees;
    public function __construct()
    {
        $this->employees = new ArrayObject();
    }

    public function add($key, Employee $employee) {
        $this->employees[$key] = $employee;
    }

    public function getIterator():Traversable
    {
        return $this->employees->getIterator();
    }
}