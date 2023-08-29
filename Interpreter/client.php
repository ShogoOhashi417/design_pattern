<?php
require_once "Context.php";
require_once "Command.php";
require_once "CommandCommand.php";
require_once "CommandListCommand.php";
require_once "JobCommand.php";

function execute($command) {
    $job = new JobCommand();
    try {
        $job->execute(new Context($command));
    } catch (Exception $e) {
        echo htmlspecialchars($e->getMessage(), ENT_QUOTES, mb_internal_encoding());
    }
}
?>

<?php
$command = "bigin";
if ($command !== "") {
    execute($command);
}