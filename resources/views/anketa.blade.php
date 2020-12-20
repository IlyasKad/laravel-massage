@extends('layouts.app')

@section('title-block')
Анкета №{{$anketa->id}}
@endsection

@section('content')


<div id="container__anket">
    <h1 class="container__entry-header">Анкета № {{$anketa->id}} ({{$anketa->name}})</h1>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>Пункти</th>
                <th>Інформація про спеціаліста</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-label="Name">Ім'я</td>
                <td data-label="Age">{{$anketa->name}}</td>
            </tr>

            <tr>
                <td data-label="Name">Вік</td>
                <td data-label="Age">{{$anketa->age}}</td>
            </tr>

            <tr>
                <td data-label="Name">Місто</td>
                <td data-label="Age">{{$anketa->city->name}}</td>
            </tr>

            <tr>
                <td data-label="Name">Метро</td>
                <td data-label="Age">
                    @foreach($anketa->metros as $m)
                    {{$m->name}}
                    @endforeach
                </td>
            </tr>

            <tr>
                <td data-label="Name">Телефон</td>
                <td data-label="Age">+{{$anketa->tel}}</td>
            </tr>

            <tr>
                <td data-label="Name">Освіта</td>
                <td data-label="Age">{{$anketa->education->name}}</td>
            </tr>

            <tr>
                <td data-label="Name">Досвід</td>
                <td data-label="Age">{{$anketa->experience->name}}</td>
            </tr>

            <tr>
                <td data-label="Name">Про себе</td>
                <td data-label="Age">{{$anketa->about_me}}</td>
            </tr>

            <tr>
                <td data-label="Name">Прийом у себе</td>
                <td data-label="Age">{{$anketa->price_1h_office}} грн за годину та {{$anketa->price_2h_office}} грн за
                    дві години
                </td>
            </tr>

            <tr>
                <td data-label="Name">Виїзд до Вас</td>
                <td data-label="Age">{{$anketa->price_1h_challenge}} грн за годину та {{$anketa->price_2h_challenge}}
                    грн за дві години
                </td>
            </tr>

            <tr>
                <td data-label="Name">Послуги</td>
                <td data-label="Age">
                    <div class="ui celled list">
                        @foreach($anketa->services as $service)
                        <div class="item">{{$service->name}}</div>
                        @endforeach
                    </div>

                </td>
            </tr>

        </tbody>
    </table>

    <h3 class="container__entry-header">Наше приміщення</h3>
    @foreach($anketa->photos as $photo)
    <img id="anketa__image" class="ui large rounded image" src="{{ asset('storage/images/'.$photo->path) }} ">
    @endforeach

    <div id="container__entry-button">
        <a href="{{route('orders.create', $anketa->id)}}" class="ui secondary basic button">Записатися до спеціаліста</a>
    </div>
</div>


@endsection
