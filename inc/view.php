<?php
function view($name,$data=null,$print=true){
    $filename=ROOT.'view/'.$name.'.php';    
    if(file_exists($filename)){
        if(is_array($data)){
            extract($data);
        }
        if($print){
            require_once($filename);
        }else{
            ob_start();
            require_once($filename);
            $output = ob_get_contents();
            ob_end_clean();
            return $output;
        }
    }else{
        die('<h1>Error</h1>View <b>'.$filename.'</b> not found');
    }
}
?>
