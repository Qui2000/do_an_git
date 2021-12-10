<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Permission;
use App\Http\Requests\CreateAccountRequest;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Account::where('ma_quyen', 1)->latest()->paginate(5);
        $permissions = Permission::where('id','<>', 0)->get();
        return view('admin.personnel.index',compact('personnels', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personnel.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAccountRequest $request)
    {
        $customer = new Account;
        $customer->ten = $request->ten;
        $customer->ngay_sinh = $request->ngay_sinh;
        $customer->dia_chi = $request->dia_chi;
        $customer->sdt = $request->sdt;
        $customer->gioi_tinh = $request->gioi_tinh;
        $customer->quoc_tich = $request->quoc_tich;
        $customer->ma_quyen = 1;

        if($customer->save())
        {
            return redirect()->route('admin.personnel.index')->with('success',('Thêm thông tin nhân viên thành công!'));
        }else{
            return redirect()->route('admin.personnel.index')->withError('Thêm thông tin nhân viên thất bại!');
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
        $personnel = Account::find($id);
        $permissions = Permission::where('id','<>', 0)->get();
        return view('admin.personnel.edit',compact('personnel', 'permissions'));
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
        $customer = Account::find($id); 
        $data = $request->all();
        // dd($data);
        if($customer->update($data))
        {
            return redirect()->route('admin.personnel.index')->with('success',('Sửa thông tin nhân viên thành công!'));
        }else{
            return redirect()->route('admin.personnel.index')->withError('Sửa thông tin nhân viên thất bại!');
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
        $personnel = Account::find($id); 
        if($personnel->delete())
        {
            return redirect()->route('admin.personnel.index')->with('success',('Xóa thông tin nhân viên thành công!'));
        }else{
            return redirect()->route('admin.personnel.index')->withError('Xóa thông tin nhân viên thất bại!');
        }
    }
}