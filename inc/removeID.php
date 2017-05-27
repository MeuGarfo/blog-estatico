<?php
function removeID($text){
    $text=explode('.',$text);
    if(count($text)>1){
        unset($text[0]);
    }
    return trim(implode('.',$text));
}
?>
