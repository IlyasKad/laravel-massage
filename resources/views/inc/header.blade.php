<div class="border-bottom shadow-sm">
    <div class="navbar navbar-fixed-top">
        <div class="container">

            <div class=" d-flex flex-column flex-md-row align-items-center mb-3 bg-white header ">
                <div class="navbar-header navbar-inverse">

                    <a class="logo" href="{{ route('home') }}">RU<i class="fa fa-circle" aria-hidden="true"></i>MG</a>

                    <h5 class="my-0 mr-md-auto font-weight-normal "><a class="logotype" href="{{ route('home') }}"></a>
                    </h5>
                    <nav class="my-2 my-md-0 mr-md-3">
                        <a class="p-2 text-dark" href="{{ route('home') }}">Главная</a>



                        @if(Auth::check())
                            <a class="p-2 text-dark" href="{{ route('create') }}">Добавить анкету</a>
                            <a class="p-2 text-dark" href="{{ route('my_account') }}">Личный кабинет</a>

                            <a class="p-2 text-dark" href="{{ route('logout') }}">Выйти</a>
                            <a style="color: red;font-size: 18px;padding:0;margin-left: 40px">{{Auth::user()->name ." привет"}}</a>

                        @else
                            <a class="p-2 text-dark" href="{{ route('registration') }}">Регистрация</a>
                            <a class="p-2 text-dark" href="{{ route('login') }}">Войти</a>

                        @endif



                        {{--<a class="p-2 text-dark" href="{{ route('hobbies') }}">Выход </a>--}}
                    </nav>
                </div>

            </div>

        </div>
    </div>
<div>


{{--<div class="navbar  navbar-fixed-top">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header  navbar-inverse">--}}
            {{--<a class="logo" href="{{ route('home') }}">RU<i class="fa fa-circle" aria-hidden="true"></i>MG</a>--}}

            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
        {{--</div>--}}
        {{--<div class="navbar-collapse collapse">--}}
            {{--<ul class="nav navbar-nav navbar ">--}}
                {{--<li><a href=" {{ route('home')}}">Главная</a></li>--}}
                {{--<li><a href="http://localhost/massage3/views/profil_user.php ">Личный кабинет</a></li>--}}
                {{--<li><a href="http://localhost/massage3/views/v_create_anketa.php ">Добавить анкету</a></li>--}}
                {{--<li><a href=" http://localhost/massage3/views/logout.php">Выход </a></li>--}}
                {{--<li><a href="http://localhost/massage3/views/autorization.php">Вход <i class="fa fa-sign-in"--}}
                                                                                       {{--aria-hidden="true"></i></a></li>--}}
                {{--<li><a href=" http://localhost/massage3/views/logout.php"></a>--}}


            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}



