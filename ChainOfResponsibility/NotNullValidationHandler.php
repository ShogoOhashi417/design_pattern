<?php
require_once 'ValidationHandler.php';
?>

<?php
class NotNullValidationHandler extends ValidationHandler {
    protected function execValidation($input) {
        return ($input !== '');
    }

    protected function getErrorMessage()
    {
        return '文字を入力してください。';
    }
}