@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <h5>{{ $treatments->total() }} Treaments Available, showing {{$treatments->count()}} per page </h5>

        <div class="pagination"> {{ $treatments->links('vendor.pagination.bootstrap-4') }} </div>
        @foreach($treatments as $treatment)
            <div>
                <div class="card">
                    <div class="card-block" style="width:100%;">
                        <h3 class="card-title">{{$treatment->treatmentName}}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Treatment</h6>
                        <table class="table-striped " style="width:100%">
                            <tbody>
                            <tr>
                                <th style="width:40%;">No</th>
                                <td ;>{{$treatment->id}}</td>
                            </tr>
                            <tr>
                                <th>Series</th>
                                <td>{{$treatment->series}}</td>
                            </tr>
                            <tr>
                                <th>Code</th>
                                <td>{{$treatment->code}}</td>
                            </tr>
                            <tr>
                                <th>Treatment name</th>
                                <td>{{$treatment->treatmentName}}</td>
                            </tr>
                            <tr>
                                <th>Generation</th>
                                <td>{{$treatment->generation}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{$treatment->category}}</td>
                            </tr>
                            <tr>
                                <th>Problems</th>
                                <td>{{$treatment->problem}}</td>
                            </tr>
                            <tr>
                                <th>Problem Code</th>
                                <td>{{$treatment->problem_code}}</td>
                            </tr>

                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
            </br>
        @endforeach
        <div class="pagination"> {{ $treatments->links('vendor.pagination.bootstrap-4') }} </div>
    </div>


@endsection