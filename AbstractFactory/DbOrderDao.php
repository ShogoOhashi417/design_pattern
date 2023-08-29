<?php
require_once (dirname(__FILE__) . "/OrderDao.php");
require_once (dirname(__FILE__) . "/Order.php");
?>

<?php
class DbOrderDao implements OrderDao {
    private $orders;

    public function __construct(Itemdao $item_dao)
    {
        $this->orders = array();
        
        $order_id = 3;
        $order = new Order($order_id);
        $item_id = 1;

        $item = $item_dao->findById($item_id);
        if (!is_null($item)) {
            $order->addItem($item);
        }

        $this->orders[$order->getId()] = $order;
    }

    public function findById($order_id) {
        if (array_key_exists($order_id, $this->orders)) {
            return $this->orders[$order_id];
        } else {
            return null;
        }
    }
}

