<?php
function isActive($page) {
    $currentPage = pathinfo(strtolower(basename($_SERVER['PHP_SELF'])), PATHINFO_FILENAME);
    return strtolower(pathinfo($page, PATHINFO_FILENAME)) === $currentPage ? 'active' : '';
}
?>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/assets/img/logos/logo.webp" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link <?php echo isActive(index); ?>" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo isActive(about); ?>" aria-current="page" href="/about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo isActive(blog); ?>" aria-current="page" href="/blog.php">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
