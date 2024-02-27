<?php view("partials/head.php"); ?>
<?php view("partials/banner.php", ["heading" => $heading]); ?>
<div class="container-fluid py-3">
    <div class="container">
        <p>My Note</p>
        <p>
            <?php echo $note["body"]; ?>
        </p>
        <a class="btn btn-warning" href="/notes">Go back</a>


    </div>

</div>

<?php view("partials/bottom.php"); ?>
