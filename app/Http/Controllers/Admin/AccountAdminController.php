<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AccountAdmin;
use App\Http\Requests\AddAccountRequest;
use App\Http\Requests\EditAccountRequest;

class AccountAdminController extends Controller
{
    //
    public function getAccountAdmin(){
    	$data['adminlist'] = AccountAdmin::all();
    	return view('backend.account_admin', $data);
    }
    //
    public function postAccountAdmin(AddAccountRequest $request){
        $account = new AccountAdmin();
        $account->email = $request->email;
        $account->password = bcrypt($request->password);
        $account->ho_ten = $request->name;
        $account->save();
        return back();
    }
    //
    public function getEditAccountAdmin($id){
    	//
        $data['admin'] = AccountAdmin::find($id);
    	return view('backend.edit_account_admin', $data);
    }
    // 
    public function postEditAccountAdmin(EditAccountRequest $request, $id){
        $account = AccountAdmin::find($id);
        $account->email = $request->email;
        $account->password = bcrypt($request->password);
        $account->ho_ten = $request->name;
        $account->save();
        return redirect()->intended('admin/account_admin');
    }
    //
    public function getDeleteAccountAdmin($id){
    	//
        AccountAdmin::destroy($id);
        return back();
    }
}
