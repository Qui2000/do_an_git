@extends('admin.layout.index')
@section('title','Customer')
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
        <h3 class="text-themecolor m-b-0 m-t-0">Quản lý khách hàng / Thêm khách hàng</h3>
      </div>
    </div>
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
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
      <!-- Column -->
      <div class="col-12">
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="email">Tên khách hàng:</label>
            <input type="text" class="form-control" placeholder="Tên khách hàng" name="ten">
          </div>
          <div class="form-group">
            <label for="email">Ngày sinh:</label>
            <input type="date" class="form-control" placeholder="Ngày sinh" name="ngay_sinh">
          </div>
          <div class="form-group">
            <label for="pwd">Địa chỉ:</label>
            <input type="text" class="form-control" placeholder="Địa chỉ" name="dia_chi">
          </div>
          <div class="form-group">
            <label for="pwd">Số điện thoại:</label>
            <input type="text" class="form-control" placeholder="Số điện thoại" name="sdt">
          </div>
          <div class="form-group">
            <label for="pwd">Giới tính:</label>
            <input type="text" class="form-control" placeholder="Giới tính" name="gioi_tinh">
          </div>
          <div class="form-group">
            <label for="pwd">Quốc tịch:</label>
            <input type="text" class="form-control" placeholder="Quốc tịch" name="quoc_tich">
          </div>
          <button type="submit" class="btn btn-success">Lưu</button>
          <button type="button" class="btn btn-info"><a style="color: #fff"
              href="{{ route('admin.customer.index') }}">Trở lại</a></button>
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