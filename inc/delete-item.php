<?php

    require_once 'config.php';


    $affected=$database ->delete('items',
[  'id'=> $_POST['id']
]);


if ($affected){
    
    header("Location: $base_url/index.php");
    die();
}

?>