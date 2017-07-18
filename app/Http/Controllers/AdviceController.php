<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviceController extends Controller
{
    public function disclaimer($priority, $id){

        return view ('advice.disclaimer',compact('priority','id'));
    }
}
