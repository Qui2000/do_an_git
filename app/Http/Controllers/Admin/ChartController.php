<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PutPitch;

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
        // $denNgay = $data['den_ngay'];

        $thongKe = PutPitch::where('ngay_dat', 'like', '%'. $tuNgay .'%')->orderBy('ngay_dat', 'ASC')->get();
        $tongTien = 0;
        foreach($thongKe as $key => $val) {
            $tongTien += $val->so_tien_thanh_toan;
            $soLuongDatSan = count($thongKe);
            $ngayDat = $val->ngay_dat;
            $chart_data[] = array(
                'ngayDat' => $ngayDat,
                'tongTien' => $tongTien,
                'soLuongDatSan' => $soLuongDatSan,
            );
        }
        
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
