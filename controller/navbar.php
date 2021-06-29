<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="justify-content-start">
        <a class="navbar-brand">
          <img src="/PHP_boot/proj_ljujic/img/grb_ljujici.png" alt="" width="50" height="54">
        </a>
        <a class="navbar-brand">Bratstvo Ljujića</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="justify-content-end">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php if(!(isset($_SESSION['user']))):?> 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/PHP_boot/proj_ljujic/view/index_home.php">Početna strana</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/PHP_boot/proj_ljujic/view/search.php">Pretraga</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/PHP_boot/proj_ljujic/view/about.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
              O nama
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/history.php">Istorija</a></li>
              <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/hymn.php">Himna</a></li>
              <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/meet.php">Skupovi</a></li>
            </ul>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/PHP_boot/proj_ljujic/view/about.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                  Registracija/Login
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/login.php">Login</a></li>
                <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/register.php">Registracija</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/PHP_boot/proj_ljujic/view/contact.php" tabindex="-1" >Kontaktirajte nas</a>
            </li>   
          <?php session_start();
                else: ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="/PHP_boot/proj_ljujic/view/add_new.php">Dodavanje novih članova</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/PHP_boot/proj_ljujic/view/index_home.php">Logout</a>
                </li>
            </ul>
          <?php endif ?>
      </div>
    </div>
  </div>
</nav>
