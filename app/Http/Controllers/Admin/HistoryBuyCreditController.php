<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryBuyCreditController extends Controller
{
    //
    public function getHBCredit(){
    	return view('backend.history_credit');
    }
}
