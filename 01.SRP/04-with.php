<?php
class Book {
    function getTitle() {
        return "Принципы, паттерны и методики гибкой разработки";
    }

    function getAuthor() {
        return "Роберт Мартин";
    }

    function turnPage() {
        // указатель на следующую страницу
    }

    function getCurrentPage() {
        return "содержание текущей страницы";
    }
}

class SimpleFilePersistence {

    function save(Book $book) {
        $filename = '/documents/' . $book->getTitle() . ' - ' . $book->getAuthor();
        file_put_contents($filename, serialize($book));
    }

}