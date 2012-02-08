<?php
header("Content-Type: text/html; charset=utf-8");
/** Настройки * */
$font = "font/EanGnivc.ttf"; // Полный путь к шрифту, можно использовать .ttf файлы
$fontsize = 60; // Размер шрифта
$fontcolor = "#000000"; // Цвет текста
$text = $_GET['text']; // Текст на картинке

/** Это можно оставить как есть * */
$cmd = "convert -background none -font \"" . $font . "\" -pointsize " . $fontsize . " -fill \"" . $fontcolor . "\" label:\"" . $text . "\" -trim png:-";

header("Content-type: image/png");
system($cmd);
?>