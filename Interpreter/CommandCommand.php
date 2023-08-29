<?php
class CommandCommand implements Command {
    public function execute(Context $context)
    {
        $current_command = $context->getCuurentCommand();
        if ($current_command = "diskspace") {
            $path = "./";
            $freeze_size = disk_free_space("./");
            $max_size = disk_total_space('./');
            $ratio = $free_size / $max_size * 100;
            echo sprintf("Disk Free : ");
        } elseif ($current_command === "date") {
            echo date("Y/m/d");
        } elseif ($current_command === "line") {
            echo "--------";
        } else {
            throw new RuntimeException("invalid command" . $current_command);
        }
    }
}