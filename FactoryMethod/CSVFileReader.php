<?php
require_once 'Reader.php';
?>

<?php
class CSVFileReader implements Reader {
    private $file_name;

    public function ___construct ($file_name) {
        $this->file_name = $file_name;
    }

    public function read() {
        echo 'CSVを読む';
    }

    public function display()
    {
        echo 'CSVを表示する';
    }
}