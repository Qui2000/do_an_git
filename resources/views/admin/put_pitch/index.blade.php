@extends('admin.layout.index')
@section('title','Put pitch')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Quản lý đặt sân</h3>
            </div>
        </div>
        @if(session('success'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i>Thong bao!</h4>
            {{session('success')}}
        </div>
        @endif
        <!-- ============================================================== -->
        <div class="search" style="margin-bottom: 10px;">
            <input style="padding-left: 5px;" id="search" type="text" class="searchTerm" placeholder="Tìm kiếm tên người đặt">
            <i style="margin: 13px 0 0 -25px;" class="fa fa-search"></i>
            </button>
        </div>
        <!-- Row -->
        <div class="row">
            {{-- <div class="card" style="margin-left: 15px;">
                <div class="table-responsive">
                    <a href="{{ route('admin.putPitch.add') }}">
                        <button style="display: block ;" type="submit" class="btn btn-success">Thêm thông tin đặt
                            sân</button>
                    </a>
                </div>
            </div> --}}
            <!-- Column -->
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <div id="tablePutPitch">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    function fetch_data(page)
    {
        let val_search = $('#search').val();
        $.ajax({
            url:`putPitch/search?search=${val_search}&page=${page}`,
            success:function(data)
            {
                $('#tablePutPitch').html(data.html);
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