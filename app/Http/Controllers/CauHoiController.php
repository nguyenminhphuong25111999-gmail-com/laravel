<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListCauHoi = CauHoi::All();
        return View('CauHoiLayout.table',compact('ListCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ListLinhVuc = LinhVuc::all();
        return View('CauHoiLayout.form',compact('ListLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CauHoi = new CauHoi();
        $CauHoi->noi_dung = $request->noi_dung;
        $CauHoi->linh_vuc_id = $request->linh_vuc;
        $CauHoi->phuong_an_a = $request->phuong_an_a;
        $CauHoi->phuong_an_b = $request->phuong_an_b;
        $CauHoi->phuong_an_c = $request->phuong_an_c;
        $CauHoi->phuong_an_d = $request->phuong_an_d;
        $CauHoi->dap_an = $request->dap_an;
        $CauHoi->save();

        return redirect()->route('cau-hoi.table');
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
        $CauHoi = CauHoi::find($id);
        $ListLinhVuc = LinhVuc::all();
        
        return View('CauHoiLayout.form',compact('CauHoi','ListLinhVuc'));
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
        $CauHoi = CauHoi::find($id);
        $CauHoi->noi_dung = $request->noi_dung;
        $CauHoi->linh_vuc_id = $request->linh_vuc;
        $CauHoi->phuong_an_a = $request->phuong_an_a;
        $CauHoi->phuong_an_b = $request->phuong_an_b;
        $CauHoi->phuong_an_c = $request->phuong_an_c;
        $CauHoi->phuong_an_d = $request->phuong_an_d;
        $CauHoi->dap_an = $request->dap_an;
        $CauHoi->save();

        return redirect()->route('cau-hoi.table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CauHoi = CauHoi::find($id);
        $CauHoi->delete();

        return redirect()->route('cau-hoi.table');
    }
}
