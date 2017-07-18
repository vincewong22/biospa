<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function create($id){
        return view('priority.create',compact('id'));
    }
}
