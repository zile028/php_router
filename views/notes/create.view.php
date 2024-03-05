<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/banner.php") ?>
<div class="container-fluid py-3">
    <div class="container">
        <p>Create Note</p>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="bg-dark p-4" action="" method="POST">
                    <label class="text-white" for="body">Note description</label>
                    <textarea id="body" class="form-control mb-3" name="body" cols="30" rows="5"></textarea>
                    <?php echo isset($errors["body"]) ? "<p class='text-danger'>" . $errors["body"] . "</p>" : "" ?>
                    <button class="btn btn-warning">Create</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require base_path("views/partials/bottom.php"); ?>
