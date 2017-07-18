@extends ('layouts.layout')

@section('content')


@section('content')
    <div class="container col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
        <br/>
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="col-sm-4">

                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="../../../images/caution_blue.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Continue</h4>
                            <p class="card-text">
                                為精確計算，我們 必須………… </p>
                            {{--{{url('/survey/create/health/'.$id)}}--}}
                            </br>

                                <h4><a href="{{url('/survey/create/' .$priority .'/' .$id)}}" class="btn btn-primary">Continue</a></h4>

                            {{--@if($priority == 'slimming')--}}
                                {{--<h4><a href="{{url('/survey/create/advice_slimming/ .$id)}}" class="btn btn-primary">Continue</a></h4>--}}
                            {{--@endif--}}
                            {{--@if($priority == 'health')--}}
                                {{--<h4><a href="{{url('/survey/create/advice_health/ .$id)}}" class="btn btn-primary">Continue</a></h4>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="col-sm-4">

                    <div class="card" style="width: 20rem;">

                        <div class="card-block">
                            <h4 class="card-title">Skip</h4>
                            <p class="card-text">

                                {{--{{url('/survey/create/health/'.$id)}}--}}
                                </br>
                            <h4><a href="#" class="btn btn-warning">Skip</a></h4>

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
