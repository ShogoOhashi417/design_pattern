<?php
require_once "Text.php";
?>

<?php
class PlainText implements Text {
    private $text_string = null;

    public function getText() {
        return $this->text_string;
    }

    public function setText($text_string) {
        $this->text_string = $text_string;
    }
}