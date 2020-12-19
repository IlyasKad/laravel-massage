@extends('layouts.app')

{{--@section('title-block','')--}}

@section('title-block')
Главная
@endsection

@section('content')
{{--@foreach($anketa->type->anketas as $a)--}}


{{-- {{$user->orders}} --}}
<!------------------------------------------CONTENT-------------------------------------------------------------->

<div class="row">
    <div class="col-md-12">
        <div class="content">
            <div class="anketas">

                @foreach($anketas as $anketa)

                @if($anketa->photo==null)
                @continue;
                @endif

                <div class="list">
                    <div class="redaction"><a href="{{route('editAnketa',$anketa->id)}}">Редактировать</a></div>

                    <div class="figure">
                        <div class="pris"><i class="fa fa-rub" aria-hidden="true"></i>
                            {{$anketa->price_1h_challenge}}
                        </div>
                        <figure>
                            <a href="{{route('anketa',$anketa->id)}}">
                                <img src="{{ asset('storage/images/'.$anketa->photo->path) }} " alt="salon"></a>
                        </figure>
                    </div>
                    <div class="name-panel">
                        <a href="{{route('anketa',$anketa->id)}}" alt="name">
                            <h5>{{$anketa->name}}</h5>
                        </a>

                    </div>

                    <div class="geo">
                        <b>{{$anketa->city->name}}</b>

                        @foreach($anketa->metros as $metro)
                        <span class="metro_list">{{$metro->name}}</span>&nbsp;&nbsp;
                        @endforeach

                    </div>

                </div>

                @endforeach

            </div>

        </div>
    </div>
</div>


<!--------------------------------------END----CONTENT-------------------------------------------------------------->



@endsection
