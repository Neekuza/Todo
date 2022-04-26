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
    <h1>Very much edit list</h1>
</div>

<div class="row">
<form id="edit-form" action="inc/edit-item.php" class="col-sm-6" method="post">
    <p class="form-group">
        <textarea class="form-control" id="text" name="message" rows="3" autofocus><?php echo $item ?></textarea>
    </p>
    <p class="form-group">
        <input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
        <input type="submit" value="Edit item" class="btn-sm btn-danger">
        <span class="controls">
            <a href="<?php echo $base_url ?>" class="back-link text-muted">back</a>
        </span>
    </p>
</form>
</div>

<?php include "inc/partials/footer.php"?>