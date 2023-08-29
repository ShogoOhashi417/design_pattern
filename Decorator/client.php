<?php
require_once "UpperCaseText.php";
require_once "DoubleByteText.php";
require_once "Plaintext.php";
?>

<?php
$text = "textです";
$decorate = ["double"];

$text_object = new PlainText();
$text_object->setText($text);

foreach ($decorate as $value) {
    switch ($value) {
        case "double" :
            $text_object = new DoubleByteText($text_object);
            break;
        case "upper" :
            $text_object = new UpperCaseText($text_object);
            break;
    }
}
echo $text_object->getText() . "<br>";