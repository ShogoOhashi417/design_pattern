<?php
require_once "TextDecorator.php";
?>

<?php
class DoubleByteText extends TextDecorator {
    public function __construct(Text $target)
    {
        parent::__construct($target);
    }

    public function getText() {
        $str = parent::getText();
        $str = mb_convert_kana($str, "RANSKV");
        return $str;
    }
}