@extends('layouts.app')

@section('title-block'){{$anketa->name}}@endsection

@section('content')


    <div class="container">
        <div class="col-md-12" >


<div class="container ">

    <div class="row">
    <div class="v_anketa">

        <div class="col-md-7 ">
            <div class="header_anketa ">
                <div class="info_anketa">

                    <div class="address">
                    <h3>{{$anketa->name}}</h3>

                    <br>
                    <p>Возраст:<i> {{$anketa->age}} </i></p>

                    <br>
                    <p>город:<i> {{$anketa->city->name}}</i></p>

                    <br>
                    <p>метро:
                        @foreach($anketa->metros as $m)
                        <i>{{$m->name}}</i>
                        @endforeach

                    </p>

                    <br>
                    <p>Телефон:<b>+{{$anketa->tel}}</b> </p>

                    <br>
                    <p>Образование :<i> {{$anketa->education->name}}</i></p>

                    <br>
                    <p>Опыт работы:<i> {{$anketa->experience->name}}</i></p>
                </div>
                </div>
            </div>

            <div class="about_my">
                <p> О себе:</p>
                <p> {{$anketa->about_me}}</p>
            </div>
            <div> <h3>Цена </h3></div>
            <div class="pris_anketa">
                <div class="chas">
                    <br>
                    <b>Прием у себя: <br> </b>
                    <ul>
                        <li>
                            Час:
                            <i>
                                @if(empty($anketa->price_1h_challenge))
                                    ? руб
                                @else
                                   {{$anketa->price_1h_challenge}} руб
                                @endif
                            </i>
                        </li>
                        <li>
                            Два:
                            <i>
                                @if(empty($anketa->price_2h_challenge))
                                    ? руб
                                @else
                                    {{$anketa->price_2h_challenge}} руб
                                @endif
                            </i>
                        </li>
                    </ul>
                </div>

                <div class="dva">
                <br>
                <b>Выезд к Вам: <br> </b>
                <ul>
                    <li>
                        Час:
                        <i>
                            @if(empty($anketa->price_1h_office))
                                ? руб
                            @else
                                {{$anketa->price_1h_office}} руб
                            @endif
                        </i>
                    </li>
                    <li>
                        Два:
                        <i>
                            @if(empty($anketa->price_2h_office))
                                ? руб
                            @else
                                {{$anketa->price_2h_office}} руб
                            @endif
                        </i>
                    </li>
                </ul>
            </div>     



            
        </div>
            <div> <h3>Послуги:</h3></div>
            <div>
                    <ul>
                        @foreach($anketa->services as $service)
                        <li>{{$service->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>





        <div class="col-md-5 " >
            <div class="header_anketa ">
                <div class="photos_anketa">      

                    {{--<div class="photo_anketa"><img src="{{ asset('img/'.$anketa->photo->path) }} "></div>--}}

                    @foreach($anketa->photos as $photo)          
                       <div class="photo_anketa"><img src="{{ asset('storage/images/'.$photo->path) }} "></div>
                    @endforeach

                </div>
         </div>
        </div>
      <div class="clearfix"></div>

    </div>
    </div>

</div>

        </div>    									<!--  end  col-md-12    -->
        <div class="clearfix"></div>
    </div>






    {{--<h1>{{$anketa->name}}</h1>--}}
    {{--<h1>{{$anketa->user->email}}</h1>--}}
    {{--<h1>{{$anketa->type->name}}</h1>--}}
    {{--<br>--}}
    {{--<br>--}}


{{--        <h1>{{$anketa->photo->anketa->id}}</h1>--}}
{{--{{$anketa->city->name}}--}}

    {{--@foreach($anketa->metros as $m)--}}
        {{--<h1>{{$m->name}}</h1>--}}
        {{--@foreach($m->anketas as $a)--}}
        {{--<p>{{$a->id}}</p>--}}
        {{--@endforeach--}}
    {{--@endforeach--}}

    {{--@foreach($anketa->type->anketas as $a)--}}
        {{--<h1>{{$a->name}}</h1>--}}
    {{--@endforeach--}}

    {{--@foreach($anketa->services as $service)--}}
    {{--<h1>{{$service->name}}</h1>--}}

             {{--@foreach($service->anketas as $ss)--}}
                {{--<h3>{{$ss->name}}</h3>--}}


            {{--@endforeach--}}

    {{--@endforeach--}}

    {{--@foreach($anketa->user->role->actions as $a)--}}
    {{--<h1>{{$a->comment}}</h1>--}}
    {{--@endforeach--}}


    {{--<div class="alert alert-info">--}}


    {{--</div>--}}
@endsection
