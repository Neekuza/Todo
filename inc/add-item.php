<?php

    require 'config.php';
$id = $database ->insert('items',['text'=> $_POST['message']]);

if ($id)
{
    $message = json_encode([
        'status' => 'success',
        'id' => $id
    ]);
    die($message);
}





// die('success');
//header("Location: $base_url/index.php");
