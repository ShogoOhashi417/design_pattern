<?php
require_once "Command.php";
?>

<?php
class JobCommand implements Command {
    public function execute(Context $context)
    {
        if ($context->getCurrentCommand() !== 'bigin') {
            throw new RuntimeException('illegal command' . $context->getCurrentCommand());
        }

        $command_list = new CommandListCommand();
        $command_list->execute($context->next());
    }
}