@extends('frontend.layout.index')
@section('title','About')
@section('content')
<div>
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Chi tiết đặt sân</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Chi tiết đặt sân
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <main id="main">
        <section id="cart_items">
            <div class="container">
                <div class="table-responsive cart_info">
                    <div>
                        <a href=" {{ route('frontend.checkout.showHistory') }} " style="float: right; font-size: 18px">Xem lịch sử đặt sân</a>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu" style="background: #2eca6a;font-size: 16px;color: black;font-weight: 600;">
                                <td class="image">Mã đặt sân</td>
                                <td class="description">Loại sân</td>
                                <td class="description">Khung giờ</td>
                                <td class="description">Giá sân</td>
                                <td class="price">Loại nước</td>
                                <td class="price">Giá nước</td>
                                <td class="quantity">Số lượng nước</td>
                                <td class="total">Ngày sử dụng</td>
                                <td class="total">Tổng tiền</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0;
                            @endphp
                            @if(session()->has('order'))
                            <?php 
                              $carts = session()->get('order');
                              $total = 0;
                          ?>
                            @foreach($carts as $key => $value)
                            <?php
                            $total += $value['gia_tien'] 
                          ?>
                            <tr id="{{$key}}">
                                <td class="cart_product">
                                    {{ $value['ma_dat_san'] }}
                                </td>
                                <td class="cart_description">
                                    {{ $value['ma_san'] == 1 ? "Sân 5" : "Sân 7" }}
                                </td>
                                <td class="cart_price">
                                    {{ $value['khung_gio'] }}
                                </td>
                                <td class="cart_price">
                                    {{ $value['gia_san'] }} VND
                                </td>
                                <td class="cart_quantity">
                                    {{ $value['ma_loai_dv'] == 1 ? "Nước khoáng lạc" : "Nước lọc" }}
                                </td>
                                <td class="cart_price">
                                    {{ $value['gia_nuoc'] }} VND
                                </td>
                                <td class="cart_quantity">
                                    {{ $value['so_luong_dv'] }} chai
                                </td>
                                <td class="cart_quantity">
                                    {{ $value['ngay_su_dung'] }}
                                </td>
                                <td class="cart_quantity">
                                    {{ number_format($value['gia_tien']) }} VND
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <p style="color:red;">Không có lịch đặt sân!</p>
                            @endif
                            <tr>
                                <td colspan="7">&nbsp;</td>
                                <td colspan="4">
                                    <table class="table table-condensed total-result">
                                        <tr>
                                            <td style="font-weight: 600;">Tổng tiền: </td>
                                            <td style="color: rgb(46, 202, 106);font-weight: 600;"><span><span class="total">
                                                        <?php echo  number_format($total);  ?> VND
                                                    </span></td>
                                        </tr>
                                        <tr class="btn-order">
                                            <td style="font-weight: 600;">Thanh toán bằng: </td>
                                            <td>
                                                <?php 
                                            $vn_to_usd = $total/22930
                                          ?>
                                                <input type="hidden" id="vn_to_usd"
                                                    value="{{ (round($vn_to_usd, 2)) }}">
                                                <div id="paypal-button"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
    </main>
</div>
<script>
    $("#paypal-button").click(function(e){
        e.preventDefault();
        
        alert('ok');
    })
</script>
@endsection