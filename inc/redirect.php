<?php
function redirect($url){
    $location='Location: '.$url;
    header($location);
}
 ?>
