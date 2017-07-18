@extends('layouts.layout')

@section('content')
    <div class="container">
        </br>
        <h4 class="jumbotron">Create a question</h4>


        <form method="POST" action="{{ url('/consultation')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="question_label" for="question">Create question</label>
                <input type="text" class="form-control" id="question" name="question" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Please enter question body
                </small>
            </div>
        </form>
    </div>
 </br>



@endsection