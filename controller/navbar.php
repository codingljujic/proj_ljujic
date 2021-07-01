<nav class="navbar navbar-expand-xl navbar-light bg-light">
          <a class="navbar-brand">
            <img src="/PHP_boot/proj_ljujic/img/grb_ljujici.png" alt="" width="60" height="70">
          </a>
          <a class="navbar-brand">Братство Љујића</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      <div class="justify-content-end">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(!(isset($_SESSION['user']))):?> 
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/PHP_boot/proj_ljujic/view/index_home.php">Почетна Страна</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/PHP_boot/proj_ljujic/view/search.php">
              Претрага
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/PHP_boot/proj_ljujic/view/about.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                О нама
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/history.php">Историја</a></li>
                <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/hymn.php">Химна</a></li>
                <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/meet.php">Скупови</a></li>
              </ul>
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="/PHP_boot/proj_ljujic/view/about.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                    Регистрација/Логин
                  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/login.php">Логин</a></li>
                  <li><a class="dropdown-item" href="/PHP_boot/proj_ljujic/view/register.php">Регистрација</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/PHP_boot/proj_ljujic/view/contact.php" tabindex="-1" >Контактирајте нас</a>
              </li>   
            <?php session_start();
                  else: ?>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="/PHP_boot/proj_ljujic/view/add_new.php">Додавање нових чланова</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/PHP_boot/proj_ljujic/view/index_home.php">Логаут</a>
                  </li>
              </ul>
              <?php endif ?>
          </ul>
        </div>
      </div>
</nav>
