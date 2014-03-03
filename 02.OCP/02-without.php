<?php
class Music {

    public $length;
    public $sent;

    public $artist;
    public $album;
    public $releaseDate;

    function getAlbumCoverFile() {
        return 'Images/Covers/' . $this->artist . '/' . $this->album . '.png';
    }
}


class Progress {

    private $_file;

    function __construct($file) {
        $this->_file = $file;
    }

    function getAsPercent() {
        return $this->_file->sent * 100 / $this->_file->length;
    }
}

// тест
$music = new Music();
$music->length = 200;
$music->sent = 100;

$progress = new Progress($music);

if ($progress->getAsPercent() == 50) {
    echo 'OK!';
}





















































/*
class Progress {

    private $measurableContent;

    function __construct($measurableContent) {
        $this->measurableContent = $measurableContent;
    }

    function getAsPercent() {
        return $this->measurableContent->sent * 100 / $this->measurableContent->length;
    }

}