@extends('layouts.app')

@section('title-block')
Створити замовлення
@endsection

@section('content')

<div id="container__add-anket">
    <h1 id="header__h1" class="container__entry-header">Запис до спеціаліста</h1>
    <form enctype="multipart/form-data" action="" method="get" class="ui form">
        @csrf

        <div class="field">
            <h3>Анкета № {{$anketa->id}}</h3>
        </div>

        <div class="field">
            <h3>Ім'я спеціаліста: {{$anketa->name}}</h3>
        </div>

        <div class="field">
            <h3>Вік спеціаліста:  {{$anketa->age}}</h3>
        </div>

        <div class="field">
            <h3>Телефон:  +{{$anketa->tel}}</h3>
        </div>

        <div class="field">
            <h3>Місто:  {{$anketa->city->name}}</h3>
        </div>

        <div class="field">
            <h3>Метро:  @foreach($anketa->metros as $m)
                {{$m->name}}
                @endforeach
            </h3>
        </div>

        <div class="field">
            <h3>Ціна за годину: {{$anketa->price_1h_office}}</h3>
        </div>

        <div class="field">
            <h3>Години прийому: </h3>
            <select id="timetable" class="ui input" name="timetable_id">
                @foreach($timetables as $timetable )
                <option value="{{$timetable->id}}">{{$timetable->begin}}</option>
                @endforeach
            </select>
        </div>

        <div id="container__entry-button">
            <button class="ui secondary basic button" type="submit">Записатися на прийом</button>
        </div>
</form>

</div>

@endsection
