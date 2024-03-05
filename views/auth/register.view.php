<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="/register" method="post" class="bg-dark bg-opacity-50 p-3 my-5 rounded-2">
                    <div class="d-flex flex-column gap-2">
                        <label for="fullName">Enter your full name:</label>
                        <?php if (isset($errors["fullName"])): ?>
                            <p class="text-danger lh-1 m-0"><?php echo $errors["fullName"]; ?></p>
                        <?php endif; ?>
                        <input type="text" class="form-control mb-2" name="fullName" id="fullName">
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <label for="email">Enter your email:</label>
                        <?php if (isset($errors["email"])): ?>
                            <p class="text-danger lh-1 m-0"><?php echo $errors["email"]; ?></p>
                        <?php endif; ?>
                        <input type="email" class="form-control mb-2" name="email" id="email">
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <label for="password">Enter your password:</label>
                        <?php if (isset($errors["password"])): ?>
                            <p class="text-danger lh-1 m-0"><?php echo $errors["password"]; ?></p>
                        <?php endif; ?>
                        <input type="password" class="form-control mb-3" name="password" id="password">
                    </div>
                    <div class="d-flex justify-content-between gap-3">
                        <button class="btn btn-dark form-control col" type="submit">Register</button>
                        <a href="/login" class="btn btn-warning col">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require base_path("views/partials/bottom.php"); ?>