<?php

namespace App\Http\Controllers;

use App\Models\Safety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SafetyController extends Controller
{
    public function show(){
        $tables = Safety::all();

        return view('card/safety', compact('tables'));
    }
}
