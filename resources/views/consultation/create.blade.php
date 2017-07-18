@extends('layouts.layout')

@section('content')
    <div class="container">
        </br>
        <h4 class="jumbotron">New Consultation</h4>


        <form method="POST" action="{{ url('/consultation')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="question_label" for="name">名字:</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Please enter client's name
                </small>
            </div>

            <div class="form-check">
                <label class="question_label" for="gender">性別:</label></br>
                <label class="radio-inline">
                    <input type="radio" value="female" checked="checked" name="gender">&nbsp 女 Female &nbsp
                </label>
                <label class="radio-inline">
                    <input type="radio" value="male" name="gender">&nbsp 男 Male
                </label>

            </div>


            <div class="form-group">
                <label class="question_label" for="ageset">年齡</label>
                <select class="form-control" id="ageset" name="age">
                    <option>18-24</option>
                    <option>25-34</option>
                    <option>35-44</option>
                    <option>45-54</option>
                    <option>55-64</option>
                    <option>65+</option>
                </select>
            </div>


            <div class="form-group">
                <label class="question_label" for="height">名字:</label>
                <input type="number"  class="form-control" id="height" name="height" aria-describedby="heightHelp">
                <small id="heightHelp" class="form-text text-muted">Please enter client's height in cm, e.g 170
                </small>
            </div>

            <div class="form-group">
                <label class="question_label" for="phone">电话:</label>
                <input type="number"  class="form-control" id="phone" name="phone" aria-describedby="heightHelp">
                <small id="heightHelp" class="form-text text-muted">Please enter your phone number
                </small>
            </div>

            <div class="form-group">
                <label class="question_label" for="exampleInputEmail">性別</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                       placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>
            </div>

              <label class="question_label">下一步[優先選擇] Next Step [Priority Selection]</label>
            <button type="submit" class="btn btn-primary">下一個 Next</button>
            <small id="emailHelp" class="form-text text-muted">
                </small>
        </form>
    </div>
 </br>



@endsection