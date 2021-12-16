@extends('admin.layout.index')
@section('title','Customer')
@section('content')
<style>
  .chart_customer {
    margin-top: 100px;
  }
</style>
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
        <h3 class="text-themecolor m-b-0 m-t-0">Thống kê số lượng đặt sân</h3>
      </div>
    </div>
    <div class="row">
      <form autocomplete="off" style="display: inline-flex">
        @csrf
        <div class="col-md-3">
          <p>Theo ngày: <input type="text" id="datepicker" class="form-control"></p>
          <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả">
        </div>
        <!-- <div class="col-md-3">
          <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
        </div> -->
        <div class="col-md-3">
          <p>
            Lọc theo:
            <select class="dashboard-filter form-control">
              <option>---Chọn---</option>
              <option value="7ngay">7 ngày trước</option>
              <option value="thangTruoc">Tháng trước</option>
              <option value="thangNay">Tháng này</option>
              <option value="365ngayqua">365 ngày qua</option>
            </select>
          </p>
        </div>

      </form>
      <div class="col-md-12">
        <div id="chart" style="height: 250px;"></div>
      </div>
    </div>
  </div>
  <div class="chart_customer">
    <div id="columnChart" style="height: 500px; width: 100%;"></div>
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
</div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
  $(document).ready(function(){
    var chart = new Morris.Line({
      element: 'chart',
      lineColors: ['#50c763', '#dee825', '#e83c25'],
      pointFillColors: ['#ffffff'],
      pointStrokeColors:['#0000000'],
      fillObarcity: 0.6,
      hideHover: 'auto',
      parseTime: false,
      xkey: 'ngayDat',
      ykeys: ['tongTien','soLuongDatSan'],
      labels: ['Tổng tiền', 'Số lượng đặt sân']
    });
    $( "#datepicker" ).datepicker({
      prevText: "Tháng trước",
      nextText: "Tháng sau",
      dataFormat: "yy-mm-dd",
      dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
      duration: "slow",
      dateFormat: 'yy-mm-dd',
    });

    $( "#datepicker2" ).datepicker({
      prevText: "Tháng trước",
      nextText: "Tháng sau",
      dataFormat: "yy-mm-dd",
      dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
      duration: "slow",
      dateFormat: 'yy-mm-dd',
    });

    $("#btn-dashboard-filter").click(function() {
      var tu_ngay = $("#datepicker").val();
      // var den_ngay = $("#datepicker2").val();
      var token = $("#token").val();
      $.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					    }
				    });
      $.ajax({
        url: "{{ route('admin.chart.search') }}",
        type:"POST",
        dataType: "JSON",
        data: { tu_ngay: tu_ngay },
        success: function(data) {
          chart.setData(data);
        },
      })
    })
  })
</script>
@endsection