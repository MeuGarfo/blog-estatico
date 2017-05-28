<?php
function removeID($text){
    $text=explode('.',$text);
    if(count($text)>1){
        unset($text[0]);
    }
    return trim(implode('.',$text));
}
function id($text){
    $text=explode('.',$text);
    $id=$text[0];;
    if(is_numeric($id)){
        return $id;
    }
}
?>
