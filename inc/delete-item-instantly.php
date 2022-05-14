<?php

    require_once 'config.php';

    $affected=$database ->delete('items',
    [  'id'=> $_GET['id']
    ]);
    
    if ($affected){
        
        header("Location: $base_url/index.php");
        die();
    }
    
    ?>