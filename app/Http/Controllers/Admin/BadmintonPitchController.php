<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FootballPitch;
use App\Models\PriceTime;
use App\Http\Requests\CreateFootBallPitchRequest;
use App\Models\PitchType;
use App\Models\Type;

class BadmintonPitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badmintonPitchs = FootballPitch::whereHas('loaiSan', function($query) {
            $query->where('ma_loai_hinh', Type::BADMINTON);
        })->latest()->paginate(5);
        return view('admin.badminton_pitch.index', compact('badmintonPitchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaiSanList = PitchType::where('ma_loai_hinh', Type::BADMINTON)->get();
        return view('admin.badminton_pitch.add', compact('loaiSanList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFootBallPitchRequest $request)
    {
        $footballPitch = new FootballPitch;
        $data = $request->all();
        if($footballPitch->create($data))
        {
            return redirect()->route('admin.badminton_pitch.index')->with('success',('Thêm sân thành công!'));
        }else{
            return redirect()->route('admin.badminton_pitch.index')->withErrors('Thêm sân thất bại!');
        }
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
        $badmintonPitch = FootballPitch::find($id);
        $loaiSanList = PitchType::where('ma_loai_hinh', Type::BADMINTON)->get();
        return view('admin.badminton_pitch.edit', compact('badmintonPitch', 'loaiSanList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateFootBallPitchRequest $request, $id)
    {
        $badmintonPitch = FootballPitch::find($id); 
        $data = $request->all();
        if($badmintonPitch->update($data))
        {
            return redirect()->route('admin.badminton_pitch.index')->with('success',('Sửa thông tin sân thành công!'));
        }else{
            return redirect()->route('admin.badminton_pitch.index')->withErrors('Sửa thông tin sân thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footballPitch = FootballPitch::find($id); 
        if($footballPitch->delete())
        {
            return redirect()->route('admin.football_pitch.index')->with('success',('Xóa thông tin sân thành công!'));
        }else{
            return redirect()->route('admin.football_pitch.index')->withErrors('Xóa thông tin sân thất bại!');
        }
    }
}
