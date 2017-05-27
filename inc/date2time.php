<?php
function date2time($date){
    date_default_timezone_set("America/Sao_Paulo");
    $format='D M j G:i:s T Y';
    $date = date_create_from_format($format, $date);
    return date_format($date, "U");
}
?>
