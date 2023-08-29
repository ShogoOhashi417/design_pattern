<?php
require_once 'Command.php';
?>

<?php
class CompressCommand implements Command {
    private $file;
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function execute()
    {
        $this->file->compress();
    }
}