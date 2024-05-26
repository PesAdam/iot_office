<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pracovisko;

class PracoviskoController extends Controller
{
    public function show(){
        return view('card/office');
    }

    public function Object_one(){
        return view('card/security1');

    }
    public function Object_two(){
        return view('card/security2');

    }
    public function Object_three(){
        return view('card/security3');

    }
}
