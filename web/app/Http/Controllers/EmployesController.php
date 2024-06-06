<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employes;
use App\Models\EmployesHistory;

class EmployesController extends Controller
{
    public function show(){
        $tables = Employes::orderBy('id', 'desc')->get();

        return view('card/employes', compact('tables'));
    }

    public function showhistory(){
        $tables = EmployesHistory::orderBy('id', 'desc')->paginate(15);

        return view('card/historia', compact('tables'));
    }
}
