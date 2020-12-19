@extends('layouts.app')

@section('title-block')
Увійти до системи
@endsection

@section('content')

<div class="container__entry">
    <h1 class="container__entry-header">Увійти до системи</h1>
    <div>
        <form enctype="multipart/form-data" action="{{route('login')}}" method="post" class="ui form segment">
            @csrf

            <div class="field">
                <label for="type" id="container__entry-label">Нікнейм</label>
                <input name="name" class="ui input" maxlength="50">
            </div>

            <div class="field">
                <label for="type" id="container__entry-label">Пароль</label>
                <input  name="password" type="password" class="ui input">
            </div>

            <div class="inline field">
                <div class="ui toggle checkbox">
                    <input type="checkbox" name="public">
                    <label>
                        <a href="https://www.privacypolicies.com/our-privacy-policy/">Я погоджуюсь з умовами</a>
                    </label>
                </div>
            </div>
            {{-- </div> --}}
            {{--<input multiple="multiple" name="photos[]" type="file" id="photos"  accept="image/png, image/jpeg" />--}}
            {{--<input type="submit" name="submit" value="create">--}}
            <div id="container__entry-button">
                <button type="submit" class="ui primary submit button">Увійти</button>
            </div>


        </form>
    </div>
</div>

@endsection
