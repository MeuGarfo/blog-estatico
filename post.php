<?php
require_once('config.php');
$data['category']=@$_GET['category'];
$data['title']=@slug($_GET['post'],false);
$id=@$_GET['id'];
$filename=$data['category'].'/'.$id.'.'.$data['title'].'.md';
$rewrite=require_once(ROOT.'rewrite.php');
if(isset($rewrite[$filename])){
    $filename=$rewrite[$filename];
}
$filename=ROOT.$filename;
if(file_exists($filename)){
    $content=file_get_contents($filename);
    $content=explode(PHP_EOL,$content);
    $data['created_at']=@date2time($content[0]);
    unset($content[0]);
    $data['content']=markdown(implode(PHP_EOL,$content));
    view('post',$data);
}else{
    if(strlen($data['title'])<1 && isCategory($data['category'])){
        category($data['category']);
    }elseif(strlen($data['title'])>1 && isCategory($data['category'])){
        redirect('/'.$data['category']);
    }else{
        die(view('404'));
    }
}
?>
