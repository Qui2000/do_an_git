<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">SÂN BÓNG ĐÁ <span class="color-b">ĐA PHƯỚC</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="{{ route('frontend.index') }}">Trang chủ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('frontend.about') }}">Giới thiệu</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('frontend.order') }}">Đặt sân</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('frontend.contact') }}">Liên hệ</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav>