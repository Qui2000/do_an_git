@extends('admin.layout.index')
@section('title','Customer')
@section('content')
<style>
  input[type=file] {
    width: 90px;
    color: transparent;
  }
</style>
<script>
  window.pressed = function () {
    var a = document.getElementById('nhan');
    if (a.value == "") {
        fileLabel.innerHTML = "Choose file";
    }
    else {
        var theSplit = a.value.split('\\');
        fileLabel.innerHTML = theSplit[theSplit.length - 1];
    }
};
</script>
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
        <h3 class="text-themecolor m-b-0 m-t-0">Quản lý sân bóng</h3>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
      <!-- Column -->
      <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Mã loại sân</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @for($i = 1; $i <= 5; $i++)                
                <tr>
                  <td><?php echo $i ?></td>
                  <td>01</td>
                  <td>Sân A</td>
                  <td>Sân bóng 5 người</td>
                  <td>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false">
                      <i style="font-size: 25px; padding-right: 5px;" class="mdi mdi-account-edit"></i>
                    </a>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"
                    onclick="return confirm('Ban co muon xoa khong?')">
                    <i style="font-size: 25px;" class="mdi mdi-delete"></i>
                  </a>
                </td>
              </tr>
              @endfor
              </tbody>
            </table>
          </div>
        </div>
        <div style="float: right;">
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <a href=""><button style="display: block ;" type="submit" class="btn btn-success">Thêm sân bóng</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
</div>
@endsection