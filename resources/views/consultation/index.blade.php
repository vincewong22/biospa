@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
         @if(Session::has('message'))
        <h1 class="alert alert-success">Record updated {{Session::get('message')}}</h1>
        @endif

        <h3>Past consultations:</h3>

         <h5>{{ $profiles->total() }} Consultations Available, showing {{$profiles->count()}} per page </h5>

        <div class="pagination"> {{ $profiles->links('vendor.pagination.bootstrap-4') }} </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Height</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Priority</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <td><a href="{{url('/consultation/' . $profile->id .'/edit')}}">Edit</a></td>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->gender}}</td>
                    <td>{{$profile->age}}</td>
                    <td>{{$profile->height}}</td>
                    <td>{{$profile->phone}}</td>
                    <td>{{$profile->email}}</td>
                    <td>{{$profile->category}}</td>
                    <td>{{$profile->created_at}}</td>
                    <td>{{$profile->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection