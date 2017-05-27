<?php
function extractTime($filename){
    $filename=ROOT.$filename.'.md';
    $content=file_get_contents($filename);
    $content=explode(PHP_EOL,$content);
    return @date2time($content[0]);
}
 ?>
