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
        <input class="span12" type="text" id="buscaDePost" onkeyup="filtrarPosts()" placeholder="Filtrar posts.." title="Type in a name">
    </p>
    <div id='status' style='display:none'>
        <p>Nenhum post encontrado</p>
    </div>
    <ul class="nav nav-tabs nav-stacked" id="posts">
        <?php
        if(is_array($posts) && count($posts)>0){
            foreach ($posts as $key => $value) {
                unset($posts[$key]);
                $value=str_replace('.md', '', $value);
                $posts[$key]['title']=$value;
                $posts[$key]['href']=removeID(slug($value));
                if($category==DEFAULT_CATEGORY){
                    $posts[$key]['href']='/'.DEFAULT_CATEGORY.'/'.$posts[$key]['href'];
                }
                $posts[$key]['category']=$title;
                $posts[$key]['filename']=$title.'/'.slug($value,false);
            }
            foreach ($posts as $post) {
                //print loop
                $id=id($post['title']);
                $title=removeID($post['title']);
                $created_at=extractTime($post['filename']);
                $created_at=@date("dMY",$created_at);
                $created_at='<small class="pull-right visible-desktop gray">'.$created_at.'</small>';
                print '<li><a href="'.$post['href'].'/'.$id.'">'.$title.$created_at.'</a></li>';
            }
        }else{
            ?>
            <script type="text/javascript">
            document.getElementById("status").style.display = "block";
            </script>
            <?php
        }
        ?>
    </ul>

    <?php view('inc/footer'); ?>
</body>
</html>
