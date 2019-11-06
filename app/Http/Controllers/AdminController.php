<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListAdmin = Admin::All();

        return View('AdminLayout.table',compact('ListAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('AdminLayout.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Admin = new Admin();
        $Admin->tai_khoan = $request->tai_khoan;
        $Admin->email = $request->email;
        $Admin->password = $request->password;
        $Admin->ho_ten = $request->ho_ten;
        $Admin->dia_chi = $request->dia_chi;
        $Admin->save();

        return redirect()->route('admin.table');
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
        $Admin = Admin::find($id);

        return View('AdminLayout.form',compact('Admin'));
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
        $Admin = Admin::find($id);
        $Admin->tai_khoan = $request->tai_khoan;
        $Admin->email = $request->email;
        $Admin->password = $request->password;
        $Admin->ho_ten = $request->ho_ten;
        $Admin->dia_chi = $request->dia_chi;
        $Admin->save();

        return redirect()->route('admin.table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Admin = Admin::find($id);
        $Admin->delete();

        return redirect()->route('admin.table');
    }
}
