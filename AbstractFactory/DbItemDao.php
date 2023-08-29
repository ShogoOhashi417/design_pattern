<?php
require_once 'ItemDao.php';
require_once 'Item.php';
?>

<?php
class DbItemDao implements ItemDao {
    private $items;
    public function __construct()
    {
        $this->items = array();
        $item_id = 1;
        $item_name = 'car';

        $item = new Item($item_id, $item_name);
        $this->items[$item->getId()] = $item;
    }

    public function findById($item_id)
    {
        if (array_key_exists($item_id, $this->items)) {
            return $this->items[$item_id];
        } else {
            return null;
        }
    }
}