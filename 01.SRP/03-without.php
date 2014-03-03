<?php
class Book {

    function getTitle() {
        return "A Great Book";
    }

    function getAuthor() {
        return "John Doe";
    }

    function turnPage() {
        // pointer to next page
    }

    function getCurrentPage() {
        return "current page content";
    }

    function save() {
        $filename = '/documents/'. $this->getTitle(). ' - ' . $this->getAuthor();
        file_put_contents($filename, serialize($this));
    }

}