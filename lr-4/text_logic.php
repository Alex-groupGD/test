<?php

session_start();


if(isset($_GET['preset'])){
    $path = $_SERVER['DOCUMENT_ROOT'] . '/presets/lr4_[preset_name].html';
    $preset = $_GET['preset'];

    $path = preg_replace('/\[preset_name\]/', $preset, $path);

    if(file_exists($path)){
        $content = file_get_contents($path);

        $_POST['text'] = $content;

    }else{
        echo 'Такого пресета не существует';

    }

}


function zad1(){

    @$dom = new DOMDocument('1.0', 'UTF-8');
    @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $_POST['text']);
    @$books = $dom->getElementsByTagName('h1');
    foreach ($books as $book) {
        $title = $book->textContent;


        echo "<tr><td> <h2>Заголовки первого уровня- </h2></td>" . "<td>" . $title . "</td></tr>" ;

    }
    @$dom = new DOMDocument('1.0', 'UTF-8');
    @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $_POST['text']);
    @$books = $dom->getElementsByTagName('h2');
    foreach ($books as $book) {
        $title = $book->textContent;


        echo "<tr><td> <h2> Заголовки второго уровня- </h2></td>" . "<td>" . $title . "</td></tr>" ;

    }

}


function zad2(){

    $i = 0;
    @$dom = new DOMDocument('1.0', 'UTF-8');
    @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $_POST['text']);
    @$books = $dom->getElementsByTagName('a');
    $books_arr = array();
    foreach ($books as $book) {
        $title = $book->textContent;
        $books_arr[] = $title;
        $i++;

        echo "<tr><td> <h2>Ссылки из текста </h2></td>" . "<td>" . $i . "<a href='#'>" . $title . "<a/></td></tr>" ;
    }


}

function zad3($text){

    $textdo = $text;
    $text = preg_replace('/([!();:,.?])\\1+\\1+/', '$1$1$1', $text);

    return  "<tr><td> <h2>" . $textdo ." </h2></td>" . "<td>"   . $text . "</td></tr>" ;

}

function zad4($text){

    echo '<h3>Задание ноиер 17:</h3>' . preg_replace('/\\b(\\w+)\\s\\1\\b/u' , '\1  <b style="color:#FF0000; background:#FFFF00;">' .'\1' .'</b> ', $text ) ;

}