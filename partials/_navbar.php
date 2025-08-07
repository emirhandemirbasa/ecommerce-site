<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="container-fluid px-4 px-lg-5">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php" style="margin-left:160px;">E-TICARET</a>

    <!-- Hamburger Menü -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobilModal" aria-controls="navbarMobilModal" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menü Öğeleri -->
    <div class="collapse navbar-collapse justify-content-end" style="margin-right:160px;" id="navbarMobilModal">
      <ul class="navbar-nav align-items-center gap-3">
        
        <!-- Hesabım -->
        <li class="nav-item">
          <a href="favori-urunler.php" class="nav-link d-flex align-items-center gap-1">
            <i class="bi bi-person-fill"></i>
            <span>Hesabım</span>
          </a>
        </li>

        <!-- Favoriler -->
        <li class="nav-item">
          <a href="favori-urunler.php" class="nav-link d-flex align-items-center gap-1">
            <i class="bi bi-star-fill"></i>
            <span>Favori Ürünlerim</span>
          </a>
        </li>

        <!-- Sepetim -->
        <li class="nav-item">
          <a href="sepetim.php" class="nav-link position-relative d-flex align-items-center gap-2">
            <i class="bi bi-cart4 fs-5"></i>
            <span>Sepetim</span>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-3" >
              3
              <span class="visually-hidden">Sepetteki ürün sayısı</span>
            </span>
          </a>
        </li>

        <!-- Dikey çizgi -->
        <li><div class="vr h-75 mx-2"></div></li>

        <!-- Giriş/Kayıt -->
        <li class="nav-item">
          <a href="login.php" class="btn btn-primary">Giriş/Kayıt</a>
        </li>

        <!-- Gece/Gündüz -->
        <li class="nav-item">
          <form method="post" action="#">
            <input type="submit" class="btn btn-outline-success" value="GECE/GÜNDÜZ">
          </form>
        </li>

      </ul>
    </div>
  </div>
</nav>
