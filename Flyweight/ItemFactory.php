<?php
require_once "Item.php";
?>

<?php
class ItemFactory {
    private $pool;
    private static $instance = null;

    private function __construct($file_name) 
    {
        $this->buildPool($file_name);
    }

    public static function getInstance($file_name) {
        if (is_null(self::$instance)) {
            self::$instance = new ItemFactory($file_name);
        }

        return self::$instance;
    }

    public function getItem($code) {
        if (array_key_exists($code, $this->pool)) {
            return $this->pool[$code];
        } else {
            return null;
        }
    }

    private function buildPool($file_info) {
        $this->pool = [];

        foreach ($file_info as $file) {
            $item_code = $file['code'];
            $item_name = $file['name'];
            $item_price = $file['price'];
            $this->pool[$item_code] = new Item($item_code, $item_name, $item_price);
        }
    }
}