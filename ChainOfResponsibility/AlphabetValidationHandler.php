<?php
require_once 'ValidationHandler.php';
?>

<?php
class AlphabetValidationHandler extends ValidationHandler {
    
    protected function execValidation($input) {
        return preg_match('/^[a-zA-Z]+$/', $input);
    }

    protected function getErrorMessage()
    {
        return '英字で入力してください';
    }
}