@extends('layouts.layout')

@section('content')
    <div class="container">
        </br>
        <h4 class="jumbotron">Survey for {{$priority}} </h4>
        {{--<form method="POST" action="{{ url('/survey/create' .$questions->priority)}}">--}}


        <form method="POST" action="{{url('/survey/'. $priority . '/'. $id )}}">
            {{ csrf_field() }}
            @foreach($questions->chunk(2) as $questions_chunk)
                <div class="row">
                    @foreach($questions_chunk as $question)
                        <div class="col-md-6">

                            <div class="funkyradio">
                                <h4 class="question_label">{{$question->id}}: <small>{{$question->question_eng}}</small></h4>
                                <div class="funkyradio-info">
                                    <input type="checkbox" name="{{$question->id}}" id="{{$question->id}}"/>
                                    <label for="{{$question->id}}">{{$question->question}}</label>

                                </div>
                            </div>
                        </div>

                    @endforeach
                    </hr>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary"> Submit</button>
        </form>
        </br>
    </div>




@endsection

{{--<div class="col-md-4">--}}
{{--<div class="col-md-6">--}}
{{--<h4>Radio Buttons</h4>--}}

{{--<div class="funkyradio">--}}
{{--<div class="funkyradio-default">--}}
{{--<input type="radio" name="radio" id="radio1" />--}}
{{--<label for="radio1">First Option default</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-primary">--}}
{{--<input type="radio" name="radio" id="radio2" checked/>--}}
{{--<label for="radio2">Second Option primary</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-success">--}}
{{--<input type="radio" name="radio" id="radio3" />--}}
{{--<label for="radio3">Third Option success</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-danger">--}}
{{--<input type="radio" name="radio" id="radio4" />--}}
{{--<label for="radio4">Fourth Option danger</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-warning">--}}
{{--<input type="radio" name="radio" id="radio5" />--}}
{{--<label for="radio5">Fifth Option warning</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-info">--}}
{{--<input type="radio" name="radio" id="radio6" />--}}
{{--<label for="radio6">Sixth Option info</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<h4>Checkbox Buttons</h4>--}}

{{--<div class="funkyradio">--}}
{{--<div class="funkyradio-default">--}}
{{--<input type="checkbox" name="checkbox" id="checkbox1" checked/>--}}
{{--<label for="checkbox1">First Option default</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-primary">--}}
{{--<input type="checkbox" name="checkbox" id="checkbox2" checked/>--}}
{{--<label for="checkbox2">Second Option primary</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-success">--}}
{{--<input type="checkbox" name="checkbox" id="checkbox3" checked/>--}}
{{--<label for="checkbox3">Third Option success</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-danger">--}}
{{--<input type="checkbox" name="checkbox" id="checkbox4" checked/>--}}
{{--<label for="checkbox4">Fourth Option danger</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-warning">--}}
{{--<input type="checkbox" name="checkbox" id="checkbox5" checked/>--}}
{{--<label for="checkbox5">Fifth Option warning</label>--}}
{{--</div>--}}
{{--<div class="funkyradio-info">--}}
{{--<input type="checkbox" name="checkbox" id="checkbox6" checked/>--}}
{{--<label for="checkbox6">Sixth Option info</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}