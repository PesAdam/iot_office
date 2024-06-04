<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pracovisko;
use Illuminate\Support\Facades\DB;

class PracoviskoController extends Controller
{
    public function show(){
        return view('card/office');
    }

    public function Object_one(){
        $security1 = DB::table('security_1')->orderBy('id', 'desc')->first();
    
        return view('card/security1',[
            'security1' => $security1
        ]);

    }
    public function Object_two(){
        $security2 = DB::table('security_2')->orderBy('id', 'desc')->first();
    
        return view('card/security2',[
            'security2' => $security2
        ]);

    }
    
}
