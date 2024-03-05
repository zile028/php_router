<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<div class="container-fluid py-3">
    <p>Error 403: Unauthorized.</p>
    <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" class="btn btn-warning">Go to Home page</a>
</div>
<?php require base_path("views/partials/bottom.php") ?>
