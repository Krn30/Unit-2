<?php
$text="Programming in PHP";
echo strlen($text)."<br>";
echo strpos($text,"PHP")."<br>";
echo str_word_count($text)."<br>";
echo strrev($text)."<br>";
echo str_replace("PHP","Python",$text)."<br>";
echo strtolower($text)."<br>";
echo strtoupper($text);
?>
