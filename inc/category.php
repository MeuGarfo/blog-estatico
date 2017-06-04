<?php
function category($category){
    require_once('./config.php');
    $posts=files($category);
    $data['title']=$category;
    $data['posts']=$posts;
    $data['category']=$category;
    view('category',$data);
}

function isCategory($category){
    $categories=categories();
    if(in_array($category,$categories)){
        return true;
    }else{
        return false;
    }
}
function categories(){
    return require ROOT.'/categories.php';
}
?>
