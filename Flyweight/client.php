<?php
require_once "ItemFactory.php";
?>

<?php
$file = [
    [
        'code' => "1",
        'name' => 'ファイル1',
        'price' => '100'
    ],
    [
        'code' => "2",
        'name' => 'ファイル2',
        'price' => '200'
    ],
    [
        'code' => "3",
        'name' => 'ファイル3',
        'price' => '300'
    ]
];

$factory = ItemFactory::getInstance($file);

$item_list = [];
$item_list[] = $factory->getItem("1");
$item_list[] = $factory->getItem("2");
// $item_list[] = $factory->getItem("3");

if ($item_list[0] === $factory->getItem("1")) {
    echo "同一のオブジェクトです";
} else {
    echo "同一のオブジェクトではありません";
}

dumpData($item_list);

function dumpData($item_list) {
    foreach ($item_list as $item) {
        echo $item->getName();
        echo $item->getCode();
        echo $item->getPrice();
    }
}