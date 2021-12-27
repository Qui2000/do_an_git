@extends('frontend.layout.index')
@section('title', 'Order')
@php
use App\Models\FootballPitch;
@endphp
@section('content')
@section('after-css')
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
            /* width: 650px; */
            margin: 0 auto;
            padding: 0 3px;
            color: #fff;
        }

    </style>
@endsection
<!-- ======= Intro Single ======= -->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                  <h1 class="title-single">Đặt sân</h1>
                </div>
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
        <div>
            <a href="{{ route('frontend.checkout.index') }}" style="float: right; font-size: 18px;color: #2eca6a;">Xem chi tiết đặt sân tại đây</a>
            <a href="https://sandbox.vnpayment.vn/paymentv2/vpcpay.html?vnp_Amount=1806000&vnp_Command=pay&vnp_CreateDate=20210801153333&vnp_CurrCode=VND&vnp_IpAddr=127.0.0.1&vnp_Locale=vn&vnp_OrderInfo=Thanh+toan+don+hang+%3A5&vnp_OrderType=other&vnp_ReturnUrl=https%3A%2F%2Fdomainmerchant.vn%2FReturnUrl&vnp_TmnCode=DEMOV210&vnp_TxnRef=5&vnp_Version=2.1.0&vnp_SecureHash=3e0d61a0c0534b2e36680b3f7277743e8784cc4e1d68fa7d276e79c23be7d6318d338b477910a27992f5057bb1582bd44bd82ae8009ffaf6d141219218625c42">Thanh Toán</a>
        </div>
    </div>
</section><!-- End Intro Single-->
{{-- Vue components --}}
<div class="container orders">
    <form action="{{ route('frontend.order.post') }}" method="post" id="formOrderFootballPitch">
        @csrf
        <div class="orders__option">
            <div class="row">
                {{-- <div class="col-md-3">
                </div> --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Loại sân</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="ma_loai_san">
                            <option value="default">----Chọn loại sân----</option>
                            @foreach ($listFootballPitch as $footballPitch)
                                <option value="{{ $footballPitch->ma_san }}">{{ $footballPitch->ten }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ngày giờ</label>
                        <input type="date" class="form-control" name="ngay_su_dung" id="dateRequest" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" style="line-height: 6.5;">
                        <button type="button" id="showSchedule" class="btn btn-primary">Xem</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" style="line-height: 6.5; float:right">
                        <button type="submit" id="btn_order" class="btn btn-primary">Đặt sân</button>
                    </div>
                </div>
                {{-- <div class="float-right">
                    <button class="btn btn-primary" type="submit" id="btn_order" data-toggle="modal">Đặt sân</button>
                </div> --}}
            </div>
        </div>
        <div id="content-tab" style="margin-bottom: 100px;">
            <div class="active">
                <table class="table table-dark">
                    <tbody>
                        @foreach (FootballPitch::LIST_TIME_ORDER as $key => $item)
                            @if (($loop->iteration - 1) % 5 == 0)
                                <tr>
                            @endif
                            <td class="text-center item_detail" data-time="{{ $key }}">
                                <input type="hidden" name="key" value="{{ $key }}">
                                <h4>{{ $item }}</h4>
                                <input type="hidden" name="chi_tiet[{{ $key }}][khung_gio]" id="khung_gio" value="{{ $item }}" class="qty-item" disabled>
                                <span>Còn chỗ</span><br>
                                <div class=" row water mb-2" style="margin-top: 15px;">
                                    <div class="col-md-3" style="margin-top: -11px;">
                                        <span>Loại nước:</span>
                                    </div>
                                    <div class="col-md-6">
                                        <select id="loai_nuoc" name="chi_tiet[{{ $key }}][water_name]" class="qty-item text-center water_name" disabled>
                                            <option value="">---Chọn---</option>
                                            @foreach($listService as $service)
                                                    <option value="{{ $service->ma_loai_dv }}">{{ $service->ten }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class=" row water mb-2">
                                    <div class="col-md-3">
                                        <span>Số lượng:</span>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 9px;">
                                        <input id="so_luong" type="number" name="chi_tiet[{{ $key }}][water_qty]"
                                            class="qty-item text-center water_qty" disabled>
                                    </div>
                                </div>
                            </td>
                            @if ($loop->iteration % 5 == 0)
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
{{-- <!-- Add and Edit category modal -->
<div class="modal fade" id="crud-modal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="orderCrudModal" style="font-weight: 600"></h4>
            </div>
            <div class="modal-body">
                <form name="categoryForm" action="" method="POST" id="newModalForm">
                    <input type="hidden" name="cate_id" id="cate_id">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mã đặt sân: </strong>
                                <span id="ma_dat_san">12345</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mã sân</strong>
                                <span id="ma_san">1</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Loại nước</strong>
                                <span id="loai_nuoc">Nước khoáng</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Số lượng nước</strong>
                                <span id="so_luong_nuoc">10</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Ngày sử dụng</strong>
                                <span id="ngay_su_dung">2021-12-19</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tổng tiền</strong>
                                <span id="tong_tien">332,414 VND</span>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" id="btn-save" class="btn btn-primary">Thanh toán</button>
                            <a href="" class="btn btn-danger">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
@endsection
@push('after-scripts')
<script>
    $(document).ready(function() {
        $('.item_detail').click(function() {
            if (!$(this).hasClass("active__item")) {
                $(this).find('.qty-item').attr('disabled', false);
                console.log($(this).find('.qty-item'));
                $(this).addClass("active__item");
            } else {
                $(this).removeClass("active__item");
                $(this).find('.qty-item').attr('disabled', true);
            }
        });

        $('.water_name, .water_qty, .ball_qty').on('click change keyup', function(e) {
            e.stopPropagation();
        });

        async function getScheduleOrder(date) {
            let url = "{{ route('api.frontend.get-schedule') }}";
            let response = await axios.get(url, {params: {'date': date}});
            if (response) {
                console.log(response);
                
            }
        }
        $('#btn_order').click(function(){
            var valMaloaiSan = $('#exampleFormControlSelect1').val();
            var valDate = $('#dateRequest').val();
            var valKhungGio = $('#khung_gio').val();
            var valLoaiNuoc = $('#loai_nuoc').val();
            var valSoLuongNuoc = $('#so_luong').val();
            if(valMaloaiSan =='default'){var valDate = $('#dateRequest').val();
                alert('Vui lòng chọn loại sân!');
                return false;
            }
            $('#orderCrudModal').html("Chi tiết đặt sân");
            $('#cate_id').val('');
            // $('#crud-modal').modal('show');
        })

        $('#showSchedule').click(function(e){
            e.preventDefault();
            var valMaloaiSan = $('#exampleFormControlSelect1').val();
            var valDate = $('#dateRequest').val();
            if(valMaloaiSan =='default')
            {
                var valDate = $('#dateRequest').val();
                alert('Vui lòng chọn loại sân!');
                return false;
            } else {
               
            }
            
        })

    });
</script>
@endpush
