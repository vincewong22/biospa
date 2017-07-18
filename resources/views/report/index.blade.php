@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            </br>
            <h2 class="jumbotron " style="width:100%"> Viewing report for: {{$profile->name}}</h2>
            </br>
        </div>
        <form>
            <div class="row">

                <div class="col-sm-6">
                    <h4>{{$qa_count}} problem recommendation(s):</h4>

                    @foreach($qa as $item)
                        @if($loop->first)
                            <table class="table-striped" style="width:100%">
                                <?php $oldQuestion = $item->question; ?>
                                <h5 class="jumbotron"><span class="report_chinese">{{$item->question}} </span>{{$item->question_eng}}</h5>
                                @endif
                                @if($oldQuestion != $item->question)
                            </table>
                            <h5 class="jumbotron"><span class="report_chinese">{{$item->question}} </span>{{$item->question_eng}}</h5>
                            <?php $oldQuestion = $item->question?>
                            <table class="table-striped" style="width:100%">
                                @endif
                                <tr>
                                    <td>
                                        <div class="funkyradio">

                                            <div class="funkyradio-danger">

                                                <input type="checkbox" name="{{$item->id}}_qa" id="{{$item->id}}_qa"/>

                                                <label for="{{$item->id}}_qa">{{$item->treatmentName}}</label>

                                            </div>

                                            <h6 class="question_label">
                                                <a class="btn btn-warning" data-toggle="collapse" href="#collapseExample_qa{{$item->id}}" aria-expanded="false"
                                                   aria-controls="collapseExample_qa{{$item->id}}">+
                                                </a>
                                            </h6>


                                            <div class="collapse" id="collapseExample_qa{{$item->id}}">
                                                <div class="card card-block">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim
                                                    keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </table>
                </div>
                <div class="col-sm-6">
                    <h4>{{$advice_qa_count}} advice recommendation(s):</h4>

                    @foreach($advice_qa as $item)
                        @if($loop->first)
                            <table class="table-striped" style="width:100%">
                                <?php $oldQuestion = $item->question; ?>
                                <h5 class="jumbotron"><span class="report_chinese">{{$item->question}} </span>{{$item->question_eng}}</h5>
                                @endif
                                @if($oldQuestion != $item->question)
                            </table>
                            <h5 class="jumbotron"><span class="report_chinese">{{$item->question}} </span>{{$item->question_eng}}</h5>
                            <?php $oldQuestion = $item->question?>
                            <table class="table-striped" style="width:100%">
                                @endif
                                <tr>
                                    <td>

                                        <div class="funkyradio">

                                            <div class="funkyradio-info">

                                                <input type="checkbox" name="{{$item->id}}" id="{{$item->id}}"/>

                                                <label for="{{$item->id}}">{{$item->treatmentName}}</label>

                                            </div>

                                            <h6 class="question_label">
                                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample{{$item->id}}" aria-expanded="false"
                                                   aria-controls="collapseExample{{$item->id}}">+
                                                </a>
                                            </h6>


                                            <div class="collapse" id="collapseExample{{$item->id}}">
                                                <div class="card card-block">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim
                                                    keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </table>
                </div>
            </div>
        </form>
    </div>


    </div>

    <!--    --><?php
    //    dd($questions_cat);
    //    ?>

    @foreach($questions_cat as $cat)
    {{$cat->question_eng}}
    @foreach(App\Treatment::where('problem_code',$cat->problem_code)->get() as $item)
    {{$item->treatmentName }} {{$item->code }}
    <br>
    @endforeach
    @endforeach

    @endsection