@extends('layouts.app')

@section('title-block')
Головна
@endsection

@section('content')
   

    <div class="row">
        <div class="col-md-12">
            <div class="content">

               
                @foreach($orders as $order)

                    <a href="{{route('orders.show',$order->id)}}">

                        {{$order->anketa->name}}
                         {{$order->anketa->city->name}}
                         {{$order->date}}

                         @foreach($order->timetables as $time)
                            {{$time->begin}} - {{$time->end}},
                         @endforeach

                     </a>

                     <br>

                @endforeach

            </div>
        </div>
    </div>


@endsection
