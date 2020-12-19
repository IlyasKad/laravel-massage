@extends('layouts.app')

@section('title-block')   {{$order->id}}   @endsection

@section('content')


    <div class="container">
        <div class="col-md-12" >



            {{$order->anketa->name}}

            {{$order->anketa->age}}


        </div>
  </div>


@endsection
