<?php
require_once 'Reader.php';
?>

<?php

class XMLFileReader implements Reader {
    private $file_name;
    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    public function read() {
        echo 'XMLを読み込む';
    }

    public function display() {
        echo 'XMLを表示する';
    }
}