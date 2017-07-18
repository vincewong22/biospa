<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Survey;
use Illuminate\Support\Facades\DB;
use Session;

class ConsultationController extends Controller
{
    public function index()
    {
        $profiles = DB::table('profiles')->orderBy('created_at','desc')->paginate(15);

        return view('consultation.index', compact('profiles'));
    }

    public function create()
    {
        return view('consultation.create');
    }

    public function store()
    {

    $profile = Profile::create(request(['name','gender','age','height','phone','email']));

    return redirect('/priority/create/'.$profile->id);
    }

    public function edit($id){
        $profile = Profile::find($id);
        $surveys = Survey::where('profile_id',$id)->get();
        return view('consultation.edit',compact(['profile','surveys']));
    }

    public function update($id){
        $profile = Profile::find($id);

//        $profile->name = request('name');
//        $profile->gender = request('gender');
//        $profile->age = request('age');
//        $profile->height = request('height');
//        $profile->phone = request('phone');
//        $profile->email = request('email');


        $profile->fill(request()->all());
        $profile->save();

        Session::flash('message', 'Successfully updated records for: ' . $profile->name);

        return redirect(url('/consultation'));
    }

    public function create_choose_plan()
    {
        return view('consultation.choose_plan');
    }
}
