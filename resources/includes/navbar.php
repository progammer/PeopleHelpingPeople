<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top noselect">
    <div class="container-fluid">
    🤝 People Helping People
         <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='home'){echo 'thicc';}?>" href="home.php">Home</a>
                </li>

                <?php 
                // super global check
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item">
                        <a class="nav-link" href="request.php">Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="browsegive.php">Browse Givers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="browsereceive.php">Browse Opportunities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account.php">Manage Account</a>
                    </li>';
                } else {
                    echo '<li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>';
                }?>

                
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>