
<head>
<link rel="stylesheet" href="../styles/style.css" />
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="/My-first-website/images/logo.png" alt="CelestialCapture"></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
        <a class="nav-link nav-shadow" href='/My-first-website/index.php'>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-shadow" href="/My-first-website/pages/about-us.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-shadow" href="/My-first-website/pages/contact-us.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-shadow" href="/My-first-website/pages/gallery.php">Gallery</a>
        </li>

        



      </ul>
      
      <div class=" nav-item">
    <div class="d-flex flex-row justify-content-end align-items-center">
        <?php if(isset($_SESSION['full_name'])): ?>
          <ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fas fa-user-circle"></i> <?php echo isset($_SESSION['full_name']) ? $_SESSION['full_name'] : 'Login'; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end animated slideInDown" aria-labelledby="navbarDropdownMenuLink">
            <?php if(isset($_SESSION['full_name'])): ?>
              <li><a class="dropdown-item text-dark" href="/My-first-website/pages/profile.php">Profile</a></li>
              <li><a class="dropdown-item text-dark" href="/My-first-website/pages/my-bookings.php">My Bookings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>            <div>
                <form action="/My-first-website/pages/logout.php" method="post">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div></li>
            <?php else: ?>
              <li><a class="dropdown-item" href="/My-first-website/pages/login.php">Login</a></li>
            <?php endif; ?>
          </ul>
        </li>
        </ul>
            
            <!-- <div>
                <form action="/My-first-website/pages/logout.php" method="post">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div> -->
            
        <?php else : ?>
            <a href="/My-first-website/pages/login.php" class=""><button class="btn btn-primary btn-lg">Login</button></a>
        <?php endif; ?>
    </div>
</div>

      </form>
    </div>
  </div>
</nav>
