<?php
define('ROOT',__DIR__.'/');
define("SITE_NAME",'Hacker Gaucho');
require_once(ROOT.'vendor/autoload.php');
require_once(ROOT.'inc/inc.php');

# includes
inc([
    'category',
    'date2time',
    'extractTime',
    'files',
    'isDev',
    'markdown',
    'redirect',
    'removeID',
    'slug',
    'view'
]);

#desabilitar erros
if(!isDev()){
    error_reporting( 0 );
}
?>
