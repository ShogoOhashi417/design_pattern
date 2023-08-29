<?php
require_once 'Employee.php';
?>

<?php
class SalemanIterator extends FilterIterator {
    public function __construct($iterator)
    {
        parent::__construct($iterator);
    }

    public function accept(): bool
    {
        $employee = $this->current();
        return ($employee->getJob() === 'DEV');
    }
}