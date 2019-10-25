<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagementCreditController extends Controller
{
    //
    public function getCredit(){
    	return view('backend.management_credit');
    }
}
