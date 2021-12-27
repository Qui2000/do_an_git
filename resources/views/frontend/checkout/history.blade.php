@extends('frontend.layout.index')
@section('title','History')
@section('content')
<div>
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Lịch sử đặt sân</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Lịch sử đặt sân
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
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu" style="background: #2eca6a;font-size: 16px;color: black;font-weight: 600;">
                                <td class="image">Mã đặt sân</td>
                                <td class="description">Loại sân</td>
                                <td class="description">Khung giờ</td>
                                <td class="price">Loại nước</td>
                                <td class="quantity">Số lượng nước</td>
                                <td class="total">Ngày sử dụng</td>
                                <td class="total">Tổng tiền</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($historyOrders as $key => $historyOrder)
                            <tr id="{{$key}}">
                                <td class="cart_product">
                                    {{ $historyOrder['ma_dat_san'] }}
                                </td>
                                <td class="cart_description">
                                    {{ $historyOrder['ma_san'] == 1 ? "Sân 5" : "Sân 7" }}
                                </td>
                                <td class="cart_price">
                                    {{ $historyOrder['khung_gio'] }}
                                </td>
                                <td class="cart_quantity">
                                    {{ $historyOrder['ma_loai_dv'] == 1 ? "Nước Khoáng" : "Nước Sting" }}
                                </td>
                                <td class="cart_quantity">
                                    {{ $historyOrder['so_luong_dv'] }} chai
                                </td>
                                <td class="cart_quantity">
                                    {{ $historyOrder['ngay_su_dung'] }}
                                </td>
                                <td class="cart_quantity">
                                    {{ number_format($historyOrder['gia_tien']) }} VND
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            @endforeach
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