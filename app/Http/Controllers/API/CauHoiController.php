<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CauHoi;

class CauHoiController extends Controller
{
    public function LayCauHoi(Request $request)
    {
        $LinhVuc_ID = $request->query('linh-vuc');
        
        $CauHoi = CauHoi::where('linh_vuc_id','=',$LinhVuc_ID)->get()->random(1);

        $result = [
            'success' => true,
            'data' => $CauHoi
        ];
        return response()->json($result);
    }
}
