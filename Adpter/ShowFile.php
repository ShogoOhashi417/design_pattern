<?php

class ShowFile {
    private $filename;
    
    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function showPlain() {
        echo 'show';
    }

    public function showHighlight() {
        echo 'highlight';
    }
}