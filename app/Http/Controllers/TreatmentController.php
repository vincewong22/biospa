<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treatment;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{
    public function index()
    {
    $treatments = DB::table('treatments')->paginate(15);


    return view('treatment.index',compact('treatments'));
    }
}
