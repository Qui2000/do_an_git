@extends('admin.layout.index')
@section('title','Customer')
@section('content')
<style>
  input[type=file] {
    width: 90px;
    color: transparent;
  }
  .chart_customer {
      margin-top: 100px;
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
        <h3 class="text-themecolor m-b-0 m-t-0">Thống kê</h3>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
      </div>
    </div>
    <div class="chart_customer">
        <div id="columnChart" style="height: 500px; width: 100%;"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
</div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>

var columnChartValues = [{
  y: 686.04,
  label: "Tháng 1",
  color: "#1f77b4"
}, {
  y: 381.84,
  label: "Tháng 2",
  color: "#ff7f0e"
}, {
  y: 375.76,
  label: "Tháng 3",
  color: " #ffbb78"
}, {
  y: 97.48,
  label: "Tháng 4",
  color: "#d62728"
}, {
  y: 94.2,
  label: "Tháng 5",
  color: "#98df8a"
}, {
  y: 650.28,
  label: "Tháng 6",
  color: "#bcbd22"
}, {
  y: 300.2,
  label: "Tháng 7",
  color: "#f7b6d2"
}];
renderColumnChart(columnChartValues);

function renderColumnChart(values) {

  var chart = new CanvasJS.Chart("columnChart", {
    backgroundColor: "white",
    colorSet: "colorSet3",
    title: {
      text: "Thống kê khách hàng",
      fontFamily: "Verdana",
      fontSize: 25,
      fontWeight: "normal",
    },
    animationEnabled: true,
    legend: {
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    theme: "theme2",
    data: [

      {
        indexLabelFontSize: 15,
        indexLabelFontFamily: "Monospace",
        indexLabelFontColor: "darkgrey",
        indexLabelLineColor: "darkgrey",
        indexLabelPlacement: "outside",
        type: "column",
        showInLegend: false,
        legendMarkerColor: "grey",
        dataPoints: values
      }
    ]
  });

  chart.render();
}
</script>
@endsection