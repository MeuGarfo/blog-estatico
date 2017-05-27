<?php
function files($folder){
    require_once('./config.php');
    $folder=ROOT.$folder;
    $ignored = array('.', '..', '.svn', '.htaccess');
    $files = array();
    foreach (scandir($folder) as $file) {
        if (in_array($file, $ignored)) continue;
        $files[$file] = filemtime($folder . '/' . $file);
    }
    krsort($files);
    //krsort() for descending order
    //ksort() for ascending order
    $files = array_keys($files);
    return ($files) ? $files : false;
}
?>
