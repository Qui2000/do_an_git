<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PitchType;
use App\Models\PutPitchDetail;
use App\Models\Service;
use App\Models\PriceTime;
use App\Models\FootballPitch;
use Illuminate\Support\Carbon;
use App\Http\Requests\CreateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->getAllFootballPitch();

        // dd($result['service']);
        if(session()->has('order')){
            $order = session()->get('order');
        } else {
            $order = '';
        }
        
        return view('frontend.order.index')->with([
            'listFootballPitch'     => $result['footballPitch'],
            'listService'     => $result['service'],
            'listOrders'     => $result['putPitchDetail'],
            'order'         => $order,
        ]);
    }
    
    public function getAllFootballPitch()
    {
        $result['footballPitch'] =  PitchType::all();
        $result['service'] =  Service::all();
        $result['putPitchDetail'] =  PutPitchDetail::all();
    
        return $result;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        // session()->forget('order');
        $date=date_create($request->ngay_su_dung);
        $date = date_format($date,"Y/m/d H:i:s");
        $maLoaiSan = $request->ma_loai_san;
        $chiTiet = $request->chi_tiet;
        $maDatSan = rand(10,100);
        $order = session()->get('order');
        foreach($chiTiet as $key => $val) {
            $priceTime = PriceTime::where('ma_loai_san', $maLoaiSan)->where('khung_gio', FootballPitch::LIST_TIME_ORDER[$key])->first(); 
            $priceService = Service::where('ma_loai_dv', FootballPitch::LIST_SERVICE_ORDER[$val['water_name']])->first();
            // dd($priceService);   
            if($val['water_name'] == "1") {
                $giaTien =  $priceTime->gia_tien + ($priceService->gia_tien *  $val['water_qty']);
            }
            if($val['water_name'] == "2") {
                $giaTien =  $priceTime->gia_tien + ($priceService->gia_tien *  $val['water_qty']);
            }
            $order[$key] = [
                'ma_dat_san' => $maDatSan,
                'ma_san' => $maLoaiSan,
                'khung_gio' => $val['khung_gio'],
                'gia_san' => number_format($priceTime->gia_tien),
                'ma_loai_dv' => $val['water_name'],
                'gia_nuoc' =>number_format($priceService->gia_tien),
                'so_luong_dv' => $val['water_qty'],
                'ngay_su_dung' => $request->ngay_su_dung,
                'gia_tien' => $giaTien,
            ];
            session()->put('order', $order);
        }
        return redirect()->route('frontend.checkout.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
