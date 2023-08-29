<?php
require_once 'NotNullValidationHandler.php';
require_once 'MaxLengthValidationHandler.php';
?>

<?php
$validate_type ='alphabet';

$not_null_validation_handler = new NotNullValidationHandler();
$max_length_validation_handler = new MaxLengthValidationHandler(1);

switch ($validate_type) {
    case 'number' :
        include_once 'NumberValidationHandler.php';
        $option_handler = new NumberValidationHandler();
        break;

    case 'alphabet' :
        include_once 'AlphabetValidationHandler.php';
        $option_handler  = new AlphabetValidationHandler();
        break;
}

if ($option_handler) {
    $max_length_validation_handler->setHandler($option_handler);
}

$handler = $not_null_validation_handler->setHandler($max_length_validation_handler);

$post_data = '1';
$result = $handler->validate($post_data);

if ($result === true) {
    echo 'OK!!';
} else {
    echo $result;
}