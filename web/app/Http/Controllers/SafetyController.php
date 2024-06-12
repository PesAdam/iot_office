<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SafetyController extends Controller
{
    public function show(){
        return view('card/safety');
    }


    public function api()
    {
        $security1 = DB::table('security_1')->orderBy('id', 'desc')->first(['motion', 'motion_time']);
        $security2 = DB::table('security_2')->orderBy('id', 'desc')->first(['motion', 'motion_time']);

        return response()->json([
            'objekt1' => $security1 ? ($security1->motion ? '<span class="green">·</span> Aktívny' : '<span class="red">·</span> Neaktívny') : 'No data',
            'objekt2' => $security2 ? ($security2->motion ? '<span class="green">·</span> Aktívny' : '<span class="red">·</span> Neaktívny') : 'No data',
            'security1' => $security1 ? ($security1->motion ? 'Pohyb bol zaznamený v čase: ' . $security1->motion_time : 'Pohyb nebol zaznameny') : 'No data available',
            'security2' => $security2 ? ($security2->motion ? 'Pohyb bol zaznamený v čase: ' . $security2->motion_time : 'Pohyb nebol zaznameny') : 'No data available',
        ]);
    }
}
