<?php
require_once 'DaoFactory.php';
require_once 'MockFactory.php';
require_once 'MockOrderDao.php';
require_once 'MockItemDao.php';
?>

<?php
class MockFactory implements DaoFactory {
    public function createItemDao() {
        return new MockItemDao();
    }

    public function createOrderDao()
    {
        return new MockOrderDao();
    }
}