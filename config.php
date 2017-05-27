<?php
define('ROOT',__DIR__.'/');
define("SITE_NAME",'Hacker Gaucho');

# composer
require_once(ROOT.'vendor/autoload.php');

# includes
require_once(ROOT.'inc/category.php');
require_once(ROOT.'inc/date2time.php');
require_once(ROOT.'inc/extractTime.php');
require_once(ROOT.'inc/files.php');
require_once(ROOT.'inc/markdown.php');
require_once(ROOT.'inc/redirect.php');
require_once(ROOT.'inc/removeID.php');
require_once(ROOT.'inc/slug.php');
require_once(ROOT.'inc/view.php');
?>
