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

    function printCurrentPage() {
        echo "содержание текущей страницы";
    }
}