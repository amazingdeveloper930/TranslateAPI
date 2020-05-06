<?php
require_once ('TranslateApi/TranslateApi.php');

$source = 'en';
$target = 'es';
$text = ' if you ask, I can fix your error';

$trans = new TranslateApi();
$result = $trans->translate($source, $target, $text);
echo "en" . "->" . "es" . "<br/>";
echo $text . "->" . $result;
?>