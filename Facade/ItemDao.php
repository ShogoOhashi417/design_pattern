<?php
require_once 'OrderItem.php';
?>

<?php
class ItemDao {
    private static $instance;
    private $items;
    private function __construct()
    {
        $this->items = array();
        $item = new Item(1,'鉛筆',300);
        $this->items[$item->getId()] = $item;
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new ItemDao();
        }
        return self::$instance;
}

    public function findById($item_id) {
        if (array_key_exists($item_id, $this->items)) {
            return $this->items[$item_id];
        } else {
            return null;
        }
    }

    public function setAside(OrderItem $order_item) {
        echo $order_item->getItem()->getName() . 'の在庫引き当てを行いました。';
    }
}