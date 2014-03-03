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

interface Printer {
    function printPage($page);
}

class PlainTextPrinter implements Printer {

    function printPage($page) {
        echo $page;
    }
}

class HtmlPrinter implements Printer {

    function printPage($page) {
        echo '<div style="single-page">' . $page . '</div>';
    }
}


// использование

$book = new Book();
$printer = new HtmlPrinter();
$printer->printPage($book->getCurrentPage());


