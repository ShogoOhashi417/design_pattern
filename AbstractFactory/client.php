<?php
$factory = 1;

switch ($factory) {
    case 1 :
        include_once 'DbFactory.php';
        $factory = new DbFactory();
        break;
    case 2 :
        include_once 'MockFactory.php';
        $factory = new MockFactory();
        break;
}

$item_id = 1;
$item_dao = $factory->createItemDao();
$item = $item_dao->findById($item_id);
echo 'ID=' . $item_id . 'の商品は「' . $item->getName() . '」です';

$order_id = 3;
$order_dao = $factory->createOrderDao();
$order = $order_dao->findById($order_id);
echo 'ID=' . $order_id . 'の注文情報は次の通りです。';

foreach ($order->getItems() as $item) {
    echo $item['object']->getName();
}
