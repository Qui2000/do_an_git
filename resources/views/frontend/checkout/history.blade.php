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
                @if(session('success'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>Thong bao!</h4>
                    {{session('success')}}
                </div>
                @endif
                <div class="search" style="margin-bottom: 15px;">
                    <input style="padding: 5px; width:215px; color:black;border: 1px solid" id="search" type="text"
                        class="searchTerm" placeholder="Xem sân (Đã đặt / Đã hủy)">
                    <i style="margin: 13px 0 0 -25px;" class="fa fa-search"></i>
                    </button>
                </div>
                <div class="table-responsive cart_info">
                    <div id="tableHistory">

                    </div>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    function fetch_data(page)
    {
        let val_search = $('#search').val();
        $.ajax({
            url:`/frontend/checkout/search?search=${val_search}&page=${page}`,
            success:function(data)
            {
                $('#tableHistory').html(data.html);
            }
        });
    }
    $('#search').on('keyup',function(){
        let val_search = $(this).val();
        fetch_data(val_search);
    });
    
    $(document).ready(function() { 
        fetch_data();
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault(); 
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });
    });
</script>
@endsection