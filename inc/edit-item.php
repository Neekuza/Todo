<?php

    require_once 'config.php';
$affected = $database ->update('items',
[ 'text'=> $_POST['message']], 
[  'id'=> $_POST['id']
]);

if ($affected){
    
    header("Location: $base_url/index.php");
    die();
}

?>