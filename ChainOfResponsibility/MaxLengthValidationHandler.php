<?php
require_once 'ValidationHandler.php';
?>

<?php
class MaxLengthValidationHandler extends ValidationHandler {
    private $max_length;

    public function __construct($max_lenght)
    {
        $this->max_length = $max_lenght;
    }

    protected function execValidation($input) {
        return (strlen($input) <= $this->max_length);
    }

    protected function getErrorMessage()
    {
        return $this->max_length . '文字以下で入力してください。';
    }
}