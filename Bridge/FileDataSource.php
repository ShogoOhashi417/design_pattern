<?php
require_once 'DataSource.php';
?>

<?php
class FileDataSource implements DataSource {
    private $source_name;

    function __construct($source_name)
    {
        $this->source_name = $source_name;
    }

    public function open() {
        echo $this->source_name . 'を開きました' . PHP_EOL;
    }

    public function read() {
        echo $this->source_name . 'を読み込みました' . PHP_EOL;
    }

    public function close() {
        echo $this->source_name . 'を閉じました' . PHP_EOL;
    }
}