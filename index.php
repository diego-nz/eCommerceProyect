<?php
//change to require
    if(isset($_GET['view'])){
        if(file_exists('view/'.strtolower($_GET['view']).'.php')){
                include('view/'.strtolower($_GET['view']).'.php');
        }else{
            include('view/error.php');
        }
    }else{
        include ('view/index.php');
    }

?>
