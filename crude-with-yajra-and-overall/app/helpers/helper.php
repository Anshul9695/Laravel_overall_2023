<?php 
if(!function_exists('p')){
    function p($arg){
        echo "<pre>";
        print_r($arg);
        echo "</pre>";
        die;
    }
}

?>