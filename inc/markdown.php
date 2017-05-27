<?php
function markdown($text){
    $Parsedown = new Parsedown();
    return $Parsedown->text($text);
}
?>
