<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pracovisko;

class PracoviskoController extends Controller
{
    public function show(){
        $tables = Pracovisko::all();

        return view('card/office', compact('tables'));
    }
}
