<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employes;
use App\Models\EmployesHistory;

class EmployesController extends Controller
{
    public function show(){
        $tables = Employes::all();

        return view('card/employes', compact('tables'));
    }

    public function showhistory(){
        $tables = EmployesHistory::all();

        return view('card/historia', compact('tables'));
    }
}
