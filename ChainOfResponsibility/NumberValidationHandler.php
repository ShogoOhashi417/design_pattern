<?php
require_once 'ValidationHandler.php';
?>

<?php
class NumberValidationHandler extends ValidationHandler {
    protected function execValidation($input) {
        return preg_match('/^[0-9]+$/', $input);
    }

    protected function getErrorMessage()
    {
        return '数字で入力してください';
    }
}