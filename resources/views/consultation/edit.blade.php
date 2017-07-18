@extends('layouts.layout')

@section('content')
    <div class="container">
        </br>
        <h4 class="jumbotron">Editing profile for {{$profile->name}}
            <span>
            <form method="GET" action="{{url('/consultation')}}">
                </br>
                <button type="submit" class="btn btn-danger">Cancel Editing</button>
    </form>
</span>
        </h4>


        <form method="POST" action="{{ url('/consultation/' .$profile->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="question_label" for="name">名字:</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                       value="{{$profile->name}}">
                <small id="nameHelp" class="form-text text-muted">Please enter client's name
                </small>
            </div>

            @if($profile->gender == 'female')

                <div class="form-check">
                    <label class="question_label" for="gender">性別:</label></br>
                    <label class="radio-inline">
                        <input type="radio" value="female" checked="checked" name="gender">&nbsp 女 Female &nbsp
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="male" name="gender">&nbsp 男 Male
                    </label>
                </div>
            @else
                <div class="form-check">
                    <label class="question_label" for="gender">性別:</label></br>
                    <label class="radio-inline">
                        <input type="radio" value="female" name="gender">&nbsp 女 Female &nbsp
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="male" checked="checked" name="gender">&nbsp 男 Male
                    </label>
                </div>
            @endif


            <div class="form-group">
                <label class="question_label" for="ageset">年齡</label>
                <select class="form-control" id="ageset" name="age">
                    {!!   $profile->age === "18-24" ? "<option selected='selected'>18-24</option>" : "<option>18-24</option>" !!}}
                    {!!   $profile->age === "25-34" ? "<option selected='selected'>25-34</option>" : "<option>25-34</option>" !!}}
                    {!!   $profile->age === "35-44" ? "<option selected='selected'>35-44</option>" : "<option>35-44</option>" !!}}
                    {!!   $profile->age === "45-54" ? "<option selected='selected'>45-54</option>" : "<option>45-54</option>" !!}}
                    {!!   $profile->age === "55-64" ? "<option selected='selected'>55-64</option>" : "<option>55-64</option>" !!}}
                    {!!   $profile->age === "65+" ? "<option selected='selected'>65+</option>" : "<option>65+</option>" !!}}

                    {{--@if($profile->age == "25-34")--}}
                    {{--<option selected="selected">25-34</option>--}}
                    {{--@else--}}
                    {{--<option>25-34</option>--}}
                    {{--@endif--}}

                    {{--@if($profile->age == "35-44")--}}
                    {{--<option selected="selected">35-44</option>--}}
                    {{--@else--}}
                    {{--<option>35-44</option>--}}
                    {{--@endif--}}

                    {{--@if($profile->age == "45-54")--}}
                    {{--<option selected="selected">45-54</option>--}}
                    {{--@else--}}
                    {{--<option>45-54</option>--}}
                    {{--@endif--}}

                    {{--@if($profile->age == "55-64")--}}
                    {{--<option selected="selected">55-64</option>--}}
                    {{--@else--}}
                    {{--<option>55-64</option>--}}
                    {{--@endif--}}

                    {{--@if($profile->age == "65+")--}}
                    {{--<option selected="selected">65+</option>--}}
                    {{--@else--}}
                    {{--<option>65+</option>--}}
                    {{--@endif--}}

                </select>
            </div>


            <div class="form-group">
                <label class="question_label" for="height">名字:</label>
                <input type="number" class="form-control" id="height" name="height" aria-describedby="heightHelp"
                       value="{{$profile->height}}">
                <small id="heightHelp" class="form-text text-muted">Please enter client's height in cm, e.g 170
                </small>
            </div>

            <div class="form-group">
                <label class="question_label" for="phone">电话:</label>
                <input type="number" class="form-control" id="phone" name="phone" aria-describedby="heightHelp"
                       value="{{$profile->phone}}">
                <small id="heightHelp" class="form-text text-muted">Please enter your phone number
                </small>
            </div>

            <div class="form-group">
                <label class="question_label" for="exampleInputEmail">性別</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                       value="{{$profile->email}}"
                       aria-describedby="emailHelp"
                       placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>
            </div>
            <div class="jumbotron ">
                <button type="submit" class="btn btn-success ">Save</button>
            </div>
        </form>
        </br>

        <form>

        <h4 class="jumbotron">Edit Past Priorities</h4>
        @foreach($surveys as $survey)
            <h4>{{$survey->priority}}</h4>
        @endforeach
    </form>

    </div>




@endsection