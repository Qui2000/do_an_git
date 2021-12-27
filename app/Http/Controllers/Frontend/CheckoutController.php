<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PutPitchDetail;
use App\Models\PutPitch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.checkout.index');
    }

    public function showHistory()
    {
        $historyOrders = PutPitchDetail::all();
        return view('frontend.checkout.history', compact('historyOrders'));
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
        if(session()->has('order')){
            $orders = session()->get('order');
            foreach ($orders as $key => $order) {
                PutPitchDetail::create([
                    "ma_dat_san" => $order['ma_dat_san'],
                    "ma_san" => $order['ma_san'],
                    "khung_gio" => $order['khung_gio'],
                    "gia_san" => $order['gia_san'],
                    "ma_loai_dv" => $order['ma_loai_dv'],
                    "gia_nuoc" => $order['gia_nuoc'],
                    "so_luong_dv" => $order['so_luong_dv'],
                    "ngay_su_dung" => $order['ngay_su_dung'],
                    "gia_tien" =>$order['gia_tien']
                ]);

                PutPitch::create([
                    'ma_tk' => Auth::user()->id,
                    'ngay_dat' => $order['ngay_su_dung'],
                    'ten_nguoi_dat' => Auth::user()->ten,
                    'sdt_nguoi_dat' => Auth::user()->sdt,
                    'so_tien_thanh_toan' => $order['gia_tien'],
                    'ma_trang_thai' => 1
                ]);
            }
            $orders = session()->forget('order');
        } 
        return redirect()->route('frontend.checkout.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('frontend.checkout.success');
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
