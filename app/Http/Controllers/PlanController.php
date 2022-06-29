<?php

namespace App\Http\Controllers;

use App\Imports\PlanImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PlanController extends Controller
{
    public function import()
    {
        return view('import');
    }

    public function store(Request $request)
    {
        Excel::import(new PlanImport, $request->file('excel'));

        return redirect()->back();
    }
}
