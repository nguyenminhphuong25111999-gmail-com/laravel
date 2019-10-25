<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountUserController extends Controller
{
    //
    public function getAccountUser()
    {
    	return view('backend.account_user');
    }
}
