<?php include_once "inc\partials\header.php";?>
<div class="page-header">
    <h1>What should i do?</h1>
</div>

<?php
$data = $database->select('items',['id', 'text']);
?>

<ul id="item-list" class="list-group col-sm-6">
    <?php

foreach($data as $item){
    echo '<li id="item-'.$item['id'].'" class="list-group-item">';
    echo $item['text'];
    echo'<div class="controls">';
    echo'<a href="edit.php?id='.$item['id'].'" class="edit-link"><i class="fa-solid fa-pen"></i></a>';
    echo'<a href="delete.php?id='.$item['id'].'" class="delete-link text-muted"><i class="fa-solid fa-circle-xmark"></i></a>';
    echo'<a href="inc/delete-item-instantly.php?id='.$item['id'].'" class="done-link"><i class="fa-solid fa-check"></i></a>';
    echo '</div>';
    echo'</li>';
}
?>
</ul>

<form id="add-form" action="inc/add-item.php" class="col-sm-6" method="post">
    <p class="form-group">
        <textarea class="form-control" id="text" name="message" rows="3" placeholder="Na na na na" autofocus></textarea>
    </p>
    <p class="form-group">
        <input type="submit" value="add new thing" class="btn-sm btn-danger">
    </p>
</form>

<?php include "inc/partials/footer.php"?>