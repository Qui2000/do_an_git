<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PutPitch;
use Illuminate\Support\Carbon;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.chart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $tuNgay = $data['tu_ngay'];
        $denNgay = $data['den_ngay'];

        $thongKe = PutPitch::whereBetween('ngay_dat', [$tuNgay, $denNgay])->orderBy('ngay_dat', 'ASC')->get();
        foreach($thongKe as $key => $val) {
            $chart_data[] = array(
                'ngayDat' => $val->ngay_dat,
                'tongTien' => $val->so_tien_thanh_toan,
                'tienCoc' => $val->tien_coc,
            );
        }
        // dd($chart_data);
        
        echo $data = json_encode($chart_data);

    }

    public function autoChart() {

        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        $thongKe = PutPitch::whereBetween('ngay_dat', [$sub7days, $now])->orderBy('ngay_dat', 'ASC')->get();
        foreach($thongKe as $key => $val) {
            $chart_data[] = array(
                'ngayDat' => $val->ngay_dat,
                'tongTien' => $val->so_tien_thanh_toan,
                'tienCoc' => $val->tien_coc,
            );
        }
        echo $data = json_encode($chart_data);

    }

    public function searchMonth(Request $request) 
    {
        $data = $request->all();

        $dauThangNay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dauThangTruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoiThangTruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        
        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        // dd($sub7days);
        if($data['dashboard_value'] == '7ngay') {
            $thongKe = PutPitch::whereBetween('ngay_dat', [$sub7days, $now])->orderBy('ngay_dat', 'ASC')->get();
        } else if ($data['dashboard_value'] == 'thangTruoc') {
            $thongKe = PutPitch::whereBetween('ngay_dat', [$dauThangTruoc, $cuoiThangTruoc])->orderBy('ngay_dat', 'ASC')->get();
        } else {
            $thongKe = PutPitch::whereBetween('ngay_dat', [$dauThangNay, $now])->orderBy('ngay_dat', 'ASC')->get();
        }
        foreach($thongKe as $key => $val) {
            $chart_data[] = array(
                'ngayDat' => $val->ngay_dat,
                'tongTien' => $val->so_tien_thanh_toan,
                'tienCoc' => $val->tien_coc,
            );
        }
        // dd($chart_data);
        
        echo $data = json_encode($chart_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
