<?php
require_once 'Command.php';
?>

<?php
class CopyCommand implements Command {
    private $file;
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function execute()
    {
        $file = new File('copy_of_' . $this->file->getName());
        $file->create();
    }
}