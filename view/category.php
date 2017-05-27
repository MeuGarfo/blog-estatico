<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php $categoryHTML=ucfirst($title); ?>
    <title><?php print @$categoryHTML; ?></title>
    <?php view('inc/bs2'); ?>
</head>
<body>
    <?php view('inc/nav',['category'=>$title]); ?>
    <?php view('inc/logo'); ?>
    <h1><?php print @$categoryHTML; ?></h1>
    <p>
        <input class="span6" type="text" id="buscaDePost" onkeyup="filtrarPosts()" placeholder="Filtrar posts.." title="Type in a name">
    </p>
    <ul class="nav nav-tabs nav-stacked" id="posts">
        <?php
        foreach ($posts as $key => $value) {
            unset($posts[$key]);
            $value=str_replace('.md', '', $value);
            $posts[$key]['title']=$value;
            $posts[$key]['href']='/'.$title.'/'.slug($value);
        }
        foreach ($posts as $post) {
            $title=removeID($post['title']);
            $filename=slug($post['href'],false);
            $created_at=extractTime($filename);
            $created_at=@date("dMY",$created_at);
            $created_at='<small class="pull-right" style="color:#333">'.$created_at.'</small>';
            print '<li><a href="'.$post['href'].'">'.$title.$created_at.'</a></li>';
        }
        ?>
    </ul>
    <div id='status' style='display:none' class="text-center">
        <p>Nenhum post encontrado</p>
    </div>
    <?php view('inc/footer'); ?>
</body>
</html>
