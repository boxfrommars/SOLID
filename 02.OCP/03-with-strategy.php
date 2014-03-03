<?php
namespace withStrategy;

interface Measurable {
    function getLength();
    function getSent();
}

class File implements Measurable {
    private $_length;
    private $_sent;

    public $filename;
    public $owner;

    function setLength($length) {
        $this->_length = $length;
    }

    function getLength() {
        return $this->_length;
    }

    function setSent($sent) {
        $this->_sent = $sent;
    }

    function getSent() {
        return $this->_sent;
    }

    function getRelativePath() {
        return dirname($this->filename);
    }

    function getFullPath() {
        return realpath($this->getRelativePath());
    }
}

class Music implements Measurable {

    private $_length;
    private $_sent;

    public $artist;
    public $album;
    public $releaseDate;

    function getLength() {
        return $this->_length;
    }

    function getSent() {
        return $this->_sent;
    }

    function getAlbumCoverFile() {
        return 'Images/Covers/' . $this->artist . '/' . $this->album . '.png';
    }
}

class Progress {

    private $_measurableContent;

    function __construct(Measurable $measurableContent) {
        $this->_measurableContent = $measurableContent;
    }

    function getAsPercent() {
        return $this->_measurableContent->getSent() * 100 / $this->_measurableContent->getLength();
    }

}