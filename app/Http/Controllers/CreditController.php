<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListCredit = GoiCredit::All();

        return View('CreditLayout.table',compact('ListCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('CreditLayout.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Credit = new GoiCredit(); 

        $Credit->ten_goi = $request->ten_goi;
        $Credit->credit = $request->credit;
        $Credit->so_tien = $request->so_tien;
        $Credit->save();

        return redirect()->route('credit.table');
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
        $Credit = GoiCredit::find($id);

        return View('CreditLayout.form',compact('Credit'));
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
        $Credit = GoiCredit::find($id);

        $Credit->ten_goi = $request->ten_goi;
        $Credit->credit = $request->credit;
        $Credit->so_tien = $request->so_tien;
        $Credit->save();

        return redirect()->route('credit.table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Credit = GoiCredit::find($id);
        $Credit->delete();

        return redirect()->route('credit.table');
    }
}
