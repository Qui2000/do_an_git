@extends('admin.layout.index')
@section('title','Home')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Trang chủ</h3>
                {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol> --}}
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h2 class="card-title">Cung thể thao Tiên Sơn - ĐÀ NẴNG</h2> <br>
                        <div class="flot-chart">
                            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1040&amp;height=480&amp;hl=en&amp;q=cung the thao tien son&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:1040px;height:480px;}.gmap_canvas {overflow:hidden;background:none!important;width:1040px;height:480px;}.gmap_iframe {width:1040px!important;height:480px!important;}</style></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
    </div>
</div>
  
  @endsection