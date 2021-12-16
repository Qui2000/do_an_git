@extends('admin.layout.index')
@section('title','Add-PutPitch')
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
        <h3 class="text-themecolor m-b-0 m-t-0">Quản lý đặt sân / Thêm thông tin đặt sân</h3>
        @if(session('success'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i>Thong bao!</h4>
          {{session('success')}}
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>

        </div>
        @endif
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
      <!-- Column -->
      <div class="col-12">
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="pwd">Tên người đặt:</label>
            <input type="text" class="form-control" placeholder="Tên người đặt" name="ten_nguoi_dat" >
          </div>
          <div class="form-group">
            <label for="pwd">SDT người đặt:</label>
            <input type="text" class="form-control" placeholder="SDT người đặt" name="sdt_nguoi_dat">
          </div>
          <div class="form-group">
            <label for="email">Ngày đặt:</label>
            <input type="date" class="form-control" placeholder="Ngày đặt" name="ngay_dat" >
          </div>
          <div class="form-group">
            <label for="pwd">Tiền cọc:</label>
            <input type="number" class="form-control" step="0.01" placeholder="Tiền cọc" name="tien_coc">
          </div>
          <div class="form-group">
            <label for="pwd">Ngày cọc tiền:</label>
            <input type="date" class="form-control" placeholder="Ngày cọc tiền" name="ngay_coc_tien">
          </div>
          <div class="form-group">
            <label for="pwd">Số tiền thanh toán:</label>
            <input type="number" class="form-control" step="0.01" placeholder="Số tiền thanh toán" name="so_tien_thanh_toan">
          </div>
          <div class="form-group">
            <label for="pwd">Trạng thái:</label>
            <select name="ma_trang_thai" id="">
                @foreach($statusPutPitchs as $statusPutPitch)
                    <option value="{{ $statusPutPitch['id'] }}">
                        {{ $statusPutPitch['ten_trang_thai'] }}
                    </option>
                @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-success">Lưu</button>
          <button type="button" class="btn btn-info"><a style="color: #fff"
              href="{{ route('admin.putPitch.index') }}">Trở lại</a></button>
        </form>
        <div style="float: right;">
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
</div>
@endsection