<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PutPitch;
use App\Models\StatusPutPitch;
use App\Http\Requests\CreatePutPitchRequest;

class PutPitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->getAllPutPitch();
		return view('admin.put_pitch.index')->with([
            'putPitchs'            => $result['putPitchs'],
            'statusPutPitchs'        => $result['statusPutPitchs'],
        ]);
    }

    public function getAllPutPitch()
    {
        $result['putPitchs'] = PutPitch::latest()->paginate(5);
        $result['statusPutPitchs'] = StatusPutPitch::all()->toArray();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statusPutPitchs = StatusPutPitch::all()->toArray();
        return view('admin.put_pitch.add', compact('statusPutPitchs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePutPitchRequest $request)
    {
        $putPitch = new PutPitch; 
        $data = $request->all();
        // dd($data);
        if($putPitch->create($data))
        {
            return redirect()->route('admin.putPitch.index')->with('success',('Thêm thông tin đặt sân thành công!'));
        }else{
            return redirect()->route('admin.putPitch.index')->withError('Thêm thông tin khách hàng thất bại!');
        }
    }

    /**
     * search.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if($request->ajax()){
            $result = [];
            if (empty(request()->search)) {
                $result = $this->getAllPutPitch();
                $view =  view('admin.put_pitch.table')->with([
                    'putPitchs'            => $result['putPitchs'],
                    'statusPutPitchs'        => $result['statusPutPitchs'],
                ])->render();
                return response()->json(['html' => $view]);
            }
            $result = $this->getAllPutPitch();
            $result['putPitchs'] = PutPitch::latest()->where('ten_nguoi_dat', 'LIKE', '%' . $request->search . '%')->paginate(5);
            $view = view('admin.put_pitch.table')->with([
                'putPitchs'   => $result['putPitchs'],
                'statusPutPitchs' => $result['statusPutPitchs'],
            ])->render();
            return response()->json(['html' => $view]);
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
        $putPitch = PutPitch::find($id);
        $statusPutPitchs = StatusPutPitch::all()->toArray();
        return view('admin.put_pitch.edit',compact('putPitch', 'statusPutPitchs'));
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
        $putPitch = PutPitch::find($id); 
        $data = $request->all();
        // dd($data);
        if($putPitch->update($data))
        {
            return redirect()->route('admin.putPitch.index')->with('success',('Sửa thông tin đặt sân thành công!'));
        }else{
            return redirect()->route('admin.putPitch.index')->withError('Sửa thông tin đặt sân thất bại!');
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
        $putPitch = PutPitch::find($id); 
        if($putPitch->delete())
        {
            return redirect()->route('admin.putPitch.index')->with('success',('Xóa thông tin đặt sân thành công!'));
        }else{
            return redirect()->route('admin.putPitch.index')->withError('Xóa thông tin đặt sân thất bại!');
        }
    }
}
