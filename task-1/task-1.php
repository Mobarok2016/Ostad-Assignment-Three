<?php 

$text="The quick brown fox jumps over the lazy dog.";
$lower= strtolower($text);
echo $replaced= str_replace("brown","red",$lower);