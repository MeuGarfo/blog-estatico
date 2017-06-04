<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php $title=removeID($title); ?>
    <title><?php print @$title; ?></title>
    <?php view('inc/bs2'); ?>
</head>
<body>
    <?php view('inc/nav',['category'=>$category]); ?>
    <?php view('inc/logo'); ?>
    <?php
    if($category=='ux'){
        $categoryHTML=strtoupper($category);
    }else{
        $categoryHTML=ucfirst($category);
    }
    ?>
    <h1 id="title">
        <small><a class="gray" href="/<?php print $category; ?>"><?php print $categoryHTML; ?></a></small><br>
        <?php print @$title; ?>
    </h1>
    <p>
        <small>
            <?php print @date("d.M.Y h:i:s A",$created_at); ?>
        </small>
    </p>
    <?php print @$content; ?>
    <?php view('inc/footer'); ?>
</body>
</html>
