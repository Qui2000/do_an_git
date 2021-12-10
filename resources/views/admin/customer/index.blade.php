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
        <h3 class="text-themecolor m-b-0 m-t-0">Quản lý khách hàng</h3>
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
      <div class="card" style="margin-left: 15px;">
        <div class="table-responsive">
          <a href="{{ route('admin.customer.add') }}">
            <button style="display: block ;" type="submit" class="btn btn-success">Thêm khách hàng</button>
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
                  <th scope="col">Tên</th>
                  <th scope="col">Ngày sinh</th>
                  <th scope="col">Địa chỉ</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Giới tính</th>
                  <th scope="col">Quốc tịch</th>
                  <th scope="col">Quyền</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($customers as $key => $customer)
                <tr>
                  <td>{{ $key +1 }}</td>
                  <td>{{ $customer->ten }}</td>
                  <td>{{ $customer->ngay_sinh }}</td>
                  <td>{{ $customer->dia_chi }}</td>
                  <td>{{ $customer->sdt }}</td>
                  <td>{{ $customer->gioi_tinh }}</td>
                  <td>{{ $customer->quoc_tich }}</td>
                  @foreach($permissions as $permission)
                    @if($permission->id == $customer->ma_quyen)
                      <td>{{ $permission->ten }}</td>
                    @endif
                  @endforeach
                  <td>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.customer.edit', ['id'=> $customer->id]) }}" aria-expanded="false">
                      Sửa<i style="font-size: 25px; padding-right: 5px;" class="mdi mdi-account-edit"></i>
                    </a>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" style="color: red" href="{{ route('admin.customer.delete', ['id'=> $customer->id]) }}" aria-expanded="false"
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
    {{ $customers->links() }}
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
</div>
@endsection