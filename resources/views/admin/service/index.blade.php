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
        <h3 class="text-themecolor m-b-0 m-t-0">Quản lý dịch vụ</h3>
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
    <!-- Row -->
    <div class="row">
      <div class="card" style="margin-left: 15px">
        <div class="table-responsive">
          <a href="{{ route('admin.service.add') }}">
            <button style="display: block ;" type="submit" class="btn btn-success">Thêm dịch vụ</button>
          </a>
        </div>
      </div>
      <!-- Column -->
      <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Mã loại dịch vụ</th>
                  <th scope="col">Tên</th>
                  <th scope="col">Giá tiền</th>
                  <th scope="col">Đơn vị</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($services as $key => $service)              
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $service->ma_loai_dv }}</td>
                  <td>{{ $service->ten }}</td>
                  <td>{{ $service->gia_tien }}</td>
                  <td>{{ $service->don_vi }}</td>
                  <td>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.service.edit', ['id'=> $service->id]) }}" aria-expanded="false">
                      Sửa<i style="font-size: 25px; padding-right: 5px;" class="mdi mdi-account-edit"></i>
                    </a>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: red" href="{{ route('admin.service.delete', ['id'=> $service->id]) }}" aria-expanded="false"
                    onclick="return confirm('Ban co muon xoa khong?')">
                    Xóa<i style="font-size: 25px;" class="mdi mdi-delete"></i>
                    </a>
                  </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    {{ $services->links() }}
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
</div>
@endsection