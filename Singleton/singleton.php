<?php
class Singleton {
    private $id;
    private static $instance;

    private function __construct() {
        $this->id = md5(date('r'). mt_rand());
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
            echo 'Create!!';
        }
    }
}
?>