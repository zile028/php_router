<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<div class="container-fluid py-3">
    <div class="container">
        <p>My Note</p>
        <p>
            <?php echo $note["body"]; ?>
        </p>
        <a class="btn btn-warning" href="./notes">Go back</a>
    </div>

</div>
<?php require base_path("views/partials/bottom.php") ?>
