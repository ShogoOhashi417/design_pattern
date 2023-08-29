<?php
require_once 'Command.php';
?>

<?php
class Queue {
    private $command_list;
    private $current_index;
    public function __construct()
    {
        $this->command_list = [];
        $this->current_index = 0; 
    }

    public function addCommand(Command $command) {
        $this->command_list[] = $command;
    }

    public function run() {
        while(!is_null($command = $this->next())) {
            $command->execute();
        }
    }

    private function next() {
        if (count($this->command_list) === 0 || count($this->command_list) <= $this->current_index) {
            return null;
        } else {
            return $this->command_list[$this->current_index++];
        }
    }
}