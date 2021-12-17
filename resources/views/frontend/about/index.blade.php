@extends('frontend.layout.index')
@section('title','About')
@section('content')
<div>

  <main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Sân Bóng Đá Đa Phước - Đà Nẵng</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Giới thiệu
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    
    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="assets/img/giai_dau.jpg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Khai mạc giải đấu
                <span></span>
                <br> HYUNDAI CUP 2020
              </h3>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="assets/img/san2.png" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  {{-- <span>Mặt sân được làm bằng cỏ nhân tạo cấp cao</span> --}}
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h6 class="title-d">Sân bóng đá Đa Phước là 1 trong những sân bóng cỏ nhân tạo có mặt cỏ tốt và chất lượng nhất ở Đà Nẵng.
                  </h6>
                </div>
                <p class="color-text-a">
                  Sân bóng Đa Phước bao gồm: <br>
                  ✅Có 6 cụm sân 5️⃣và 2 sân 7️⃣ <br>
                  ✅Tiện ích <br>
                  🔹Có chỗ đậu xe <br>
                  🔹Banh sử dụng miễn phí <br>
                  🔹Nước uống miễn phí <br>
                  🔹Nơi đây diễn ra các trận đấu do sân bóng đá Đa Phước tổ chức <br>
                  🔹Và nhiều tiện ích khác <br>
                  Địa chỉ: Khu Đô Thị Đa Phước - Đà Nẵng.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
</div>
  
  @endsection