<?php 
require_once 'inc/config.php';
$item = $database->get("items", "text",[
    "id" => $_GET['id']
]);

if( ! $item ){
    header("HTTP/1.0 404 Not Found");
    include_once "404.php";
    die();
}

include_once "inc/partials/header.php"

?>
<div class="page-header">
    <h1>Very much delete list</h1>
</div>

<div class="row">
<form id="delete-form" action="inc/delete-item.php" class="col-sm-6" method="post">
    <p class="form-group">
        <textarea disabled class="form-control" id="text" name="message" rows="1" autofocus><?php echo $item ?></textarea>
    </p>
    <p class="form-group">
        <input name="id"  value="<?php echo $_GET['id'] ?>">
        <input type="submit" value="delete item" class="btn-sm btn-danger">
        <span class="controls">
            <a href="<?php echo $base_url ?>" class="back-link text-muted">back</a>
        </span>
    </p>
</form>
</div>

<?php include "inc/partials/footer.php"?>