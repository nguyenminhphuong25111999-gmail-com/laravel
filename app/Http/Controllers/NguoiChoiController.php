<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListNguoiChoi = NguoiChoi::All();

        return View('NguoiChoiLayout.table',compact('ListNguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('NguoiChoiLayout.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NguoiChoi = new NguoiChoi(); 
        $NguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $NguoiChoi->password = $request->password;
        $NguoiChoi->email = $request->email;
        $NguoiChoi->hinh_dai_dien = $request->hinh_dai_dien;
        $NguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
        $NguoiChoi->credit = $request->credit;
        $NguoiChoi->save();

        return redirect()->route('nguoi-choi.table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $NguoiChoi = NguoiChoi::find($id);

        return View('NguoiChoiLayout.form',compact('NguoiChoi'));
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
        $NguoiChoi = NguoiChoi::find($id);
        $NguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $NguoiChoi->password = $request->password;
        $NguoiChoi->email = $request->email;
        $NguoiChoi->hinh_dai_dien = $request->hinh_dai_dien;
        $NguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
        $NguoiChoi->credit = $request->credit;
        $NguoiChoi->save();

        return redirect()->route('nguoi-choi.table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $NguoiChoi = NguoiChoi::find($id);
        $NguoiChoi->delete();

        return redirect()->route('nguoi-choi.table');
    }
}
