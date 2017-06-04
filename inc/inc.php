<?php
function inc($includes){
    if(is_array($includes)){
        $includesList=$includes;
    }else{
        $includesList[]=$includes;
    }
    foreach ($includesList as $include) {
        $filename=ROOT.'inc/'.$include.'.php';
        if(file_exists($filename)){
            require_once($filename);
        }else{
            return false;
        }
    }
}
?>
