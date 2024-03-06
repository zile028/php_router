<nav class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/"
               class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="./" class="nav-link px-2
                        text-secondary">Home</a></li>
                <li><a href="./about" class="nav-link px-2
                text-white">About</a></li>
                <li><a href="./notes" class="nav-link px-2
                text-white">Notes</a></li>
                <li><a href="./contact" class="nav-link px-2
                text-white">Contact</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark"
                       placeholder="Search..."
                       aria-label="Search">
            </form>

            <div class="text-end">
                <?php if (isLogged()): ?>
                    <p class="d-inline-block me-2"><?php echo getUser("fullName"); ?></p>
                    <a class="btn btn-warning" href="./logout">Logout</a>
                <?php else: ?>
                    <a href="./login" class="btn btn-outline-light
                    me-2">Login</a>
                    <a href="./register" class="btn btn-warning">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

</nav>