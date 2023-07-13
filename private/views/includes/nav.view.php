<style>
nav ul li a:hover {
    background-color: rgb(255, 153, 0);
    color: White !important;
    font-size: 18px !important;

}
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="<?=ROOT?>/assets/logo.png" class="d-block mx-auto rounded circle ms-2 me-2" style="width: 60px;">
        <a class="navbar-brand ms-4" href="#">Shivaji University</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li>

                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=ROOT?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CLASSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TEST</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        USER
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="<?=ROOT?>" > Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>