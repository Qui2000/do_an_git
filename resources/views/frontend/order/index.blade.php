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

        .intro-single {
            padding: 7rem 0 1rem !important;
        }

    </style>
@endsection
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

{{-- Vue components --}}
<div class="container orders">
    <form action="{{ route('frontend.order.post') }}" method="post" id="formOrderFootballPitch">
        @csrf
        <div class="orders__option">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Loại sân</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="ma_loai_san">
                            <option>----Chọn loại sân----</option>
                            @foreach ($listFootballPitch as $footballPitch)
                                <option value="{{ $footballPitch->ma_loai_san }}">{{ $footballPitch->ten }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ngày giờ</label>
                        <input type="date" class="form-control" name="ngay_order" id="dateRequest" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <button type="button" id="showSchedule" class="btn btn-primary">Xem</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-tab">
            <div class="active">
                <table class="table table-dark">
                    <tbody>
                        @foreach (FootballPitch::LIST_TIME_ORDER as $key => $item)
                            @if (($loop->iteration - 1) % 5 == 0)
                                <tr>
                            @endif
                            <td class="text-center item_detail" data-time="{{ $key }}">
                                <h4>{{ $item }}</h4>
                                <span>Còn chỗ</span><br>
                                <div class=" row water mb-2">
                                    <div class="col-md-3">
                                        <span>Nước:</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name="chi_tiet[{{ $key }}][water_qty]"
                                            class="qty-item text-center water_qty" disabled>
                                    </div>
                                </div>
                                <div class="row ball">
                                    <div class="col-md-3">
                                        <span>Bóng:</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name="chitiet[{{ $key }}][ball_qty]"
                                            class="qty-item text-center ball_qty" disabled>
                                    </div>
                                </div>
                            </td>
                            @if ($loop->iteration % 5 == 0)
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    <button class="btn btn-primary" type="submit">Đặt sân</button>
                </div>
            </div>
        </div>
    </form>
</div>

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

        $('.water_qty, .ball_qty').on('click change keyup', function(e) {
            e.stopPropagation();
        });

        async function getScheduleOrder(date) {
            let url = "{{ route('api.frontend.get-schedule') }}";
            let response = await axios.get(url, {params: {'date': date}});
            if (response) {
                console.log(response);
                
            }
        }
    });
</script>
@endpush
