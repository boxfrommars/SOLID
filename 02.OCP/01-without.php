<?php

class File {
    public $length;
    public $sent;
}

class Progress {

    private $_file;

    function __construct(File $file) {
        $this->_file = $file;
    }

    function getAsPercent() {
        return $this->_file->sent * 100 / $this->_file->length;
    }
}


// тест
$file = new File();
$file->length = 200;
$file->sent = 100;
$progress = new Progress($file);

if ($progress->getAsPercent() == 50) {
    echo 'OK!';
}