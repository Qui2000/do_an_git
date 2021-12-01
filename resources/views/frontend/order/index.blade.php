@extends('frontend.layout.index')
@section('title','Order')
@section('content')
<style>
    ul#tabs {
        list-style-type: none;
        padding: 0;
        text-align: center;
    }

    ul#tabs li {
        display: inline-block;
        background-color: #252525;
        border-bottom: solid 2px grey;
        padding: 10px 20px;
        margin-bottom: 4px;
        color: #fff;
        cursor: pointer;
    }

    ul#tabs li:hover {
        background-color: grey;
    }

    ul#tabs li.active {
        background-color: #2eca6a;
    }

    ul#tab {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    #content-tab div {
        display: none;
    }

    #content-tab div.active {
        display: block;
    }

    #content-tab>div {
        text-align: center;
        background-color: #2eca6a;
        width: 650px;
        margin: 0 auto;
        padding: 0 3px;
        color: #fff;
    }
    .intro-single {
        padding: 7rem 0 1rem !important;
    }
</style>
<!-- ======= Intro Single ======= -->
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Trang chủ</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Đặt sân
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
</section><!-- End Intro Single-->
<div>

    <ul id="tabs">
        <li class="active">Thứ 2</li>
        <li>Thứ 3</li>
        <li>Thứ 4</li>
        <li>Thứ 5</li>
        <li>Thứ 6</li>
        <li>Thứ 7</li>
        <li>Chủ nhật</li>
    </ul>
    <div id="content-tab">
        <div class="active">
            <table class="table table-dark">
                
                <tbody>
                    <tr>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                        <td>
                            <span>05:00</span>
                            <br>
                            <span>Còn chỗ</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AD</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BC</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>Block 4</div>
        <div>Block 5</div>
        <div>Block 6</div>
        <div>Block 7</div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $("ul#tabs li").click(function(e) {
            var tabIndex = $(this).index();
            if (!$(this).hasClass("active")) {
                var nthChild = tabIndex + 1;
                $("ul#tabs li.active").removeClass("active");
                $(this).addClass("active");
                $("#content-tab div.active").removeClass("active");
                $("#content-tab div:nth-child(" + nthChild + ")").addClass("active");
            } else {
                $(this).removeClass("active");
                $("#content-tab div.active").removeClass("active");
            }
        });
    });

</script>
@endsection