<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SafetyController extends Controller
{
    public function show()
    {
        $security1 = DB::table('security_1')->orderBy('id', 'desc')->first(['motion', 'motion_time']);
        $security2 = DB::table('security_2')->orderBy('id', 'desc')->first(['motion', 'motion_time']);
        $security3 = DB::table('security_3')->orderBy('id', 'desc')->first(['motion', 'motion_time']);


        return view('card.safety', [
            'security1' => $security1,
            'security2' => $security2,
            'security3' => $security3,
        ]);
    }
}
