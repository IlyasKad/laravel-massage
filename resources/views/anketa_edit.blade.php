@extends('layouts.app')

{{--@section('title-block','')--}}

@section('title-block')
    Добавить анкету
@endsection

@section('content')

    <div class="container">
        <!--------------------------new_anketa------------------------------------------------------------------------>
        <div class="container border">
            <div class="add_profil border">

                <div class="col-md-12 ut">

                    <div class="col-md-9  blank border">
                        <!-----------------------------------Заголовок--------------------------------------------------------------->
                        <div class="profil_blank">
                            <div class="zagolovok">
                                <h3>Новая анкета</h3>
                            </div>
                            <!---------------------------------------Правила размещения----------------------------------------------------------->

                            <div class="pravila_add_anketa">
                                <p> Прочитайте пожалуйста правила размещения анкет на сайте <a href="#"> здесь</a>
                                </p>
                            </div>
                            <!------------------------------------------------Форма-------------------------------------------------->
                            <form   enctype="multipart/form-data"   action="{{route('updateAnketa',$anketa->id)}}" method="post" class="profil_form">
                                @csrf

                                <div class="col-md-4 add_anketa_type ">
                                    <label for="type">Тип анкеты</label>
                                    <select id="type" class="form-control" name="type">

                                        @foreach(App\Models\Type::getAll() as $type )
                                            @if($type->id==$anketa->type->id)
                                                <option selected value="{{$type->id}}" >{{$type->name}}</option>
                                            @else
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" form-group col-md-12 add_anketa_name">
                                    <div>
                                        <label for="type"><p>Имя</p></label>
                                        <input id="profil_name" name="profil_name" class="form-control"
                                               maxlength="50" value="{{$anketa->name}}">
                                    </div>
                                    <div>
                                        <label for="type"><p>Возраст</p></label>
                                        <input id="profil_age" name="age" class="form-control" value="{{$anketa->age}}">
                                    </div>
                                    <div>
                                        <label for="type"><p>Телефон</p></label>
                                        <input id="profil_tel" name="tel" class="form-control"
                                               placeholder="+79998887766" value="{{$anketa->tel}}">
                                    </div>
                                </div>
                                <div class=" form-group col-md-12 add_anketa_city">
                                    <div>
                                        <label for="сity">Город</label>
                                        <select id="сity" class="form-control" name="id_city">
                                            @foreach(App\Models\City::getAllCities() as $city )
                                                @if($city->id==$anketa->city->id)
                                                    <option selected value="{{$city->id}}">{{$city->name}}</option>
                                                @else
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class=" form-group col-md-12 add_anketa_metro">
                                    @for($i=0;$i<3;$i++)
                                        <div>
                                            <label for="metro{{$i}}">Метро</label>
                                            <select id="metro{{$i}}" class="form-control" name="id_metros[]">
                                                <option value="0">Выберите</option>
                                                @foreach(App\Models\Metro::All() as $metro )

                                                    @if(!empty($anketa->metros[$i]) && $metro->id==$anketa->metros[$i]->id)
                                                        <option selected value="{{$metro->id}}">{{$metro->name}}</option>
                                                    @else
                                                        <option value="{{$metro->id}}">{{$metro->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    @endfor

                                </div>

                                <div class=" form-group col-md-12 about_my1">
                                    <div class=" about_my2">
                                        <p><label> Обо мне</label></p>
                                        <textarea name="about_me" >{{$anketa->about_me}} </textarea>
                                    </div>
                                </div>

                                <!-------------------------------------------------------------------------------------------------->

                                <!-------------------------------------------Образование------------------------------------------------------->

                                <div class="col-md-12 add_anketa_education ">
                                    <div>
                                        <label for="education">Образование</label>
                                        <select id="education" class="form-control" name="id_education">
                                            @foreach(App\Models\Education::getAll() as $education )
                                                @if($education->id==$anketa->education->id)
                                                    <option selected value="{{$education->id}}">{{$education->name}}</option>
                                                @else
                                                    <option value="{{$education->id}}">{{$education->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label for="experience">опыт</label>
                                        <select id="experience" class="form-control" name="id_experience">
                                            @foreach(App\Models\Experience::getAll() as $experience )
                                                @if($experience->id==$anketa->experience->id)
                                                     <option selected value="{{$experience->id}}">{{$experience->name}}</option>
                                                @else
                                                    <option value="{{$experience->id}}">{{$experience->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-------------------------------------------------------------------------------------------------->

                                <!------------------------pris--------------------------------------------------------------------->
                                <div class=" form-group col-md-12 add_anketa_pris">
                                    <div>

                                        <label for="pris"><b>Принимаю у себя</b></label>
                                    </div>
                                    <div>
                                        <label for="pris"><p>Цена за час</p></label>
                                        <input id="pris" class="form-control" name="price_1h_office" maxlength="50"
                                               value="{{$anketa->price_1h_office}}">
                                    </div>
                                    <div>
                                        <label for="pris2"><p>Цена за два</p></label>
                                        <input id="pris2" class="form-control" name="price_2h_office"
                                               maxlength="50" value="{{$anketa->price_2h_office}}">
                                    </div>
                                </div>
                                <div class=" form-group col-md-12 add_anketa_pris">
                                    <div>
                                        <label for="pris"> <b> Выезд к Вам на дом</b></label>
                                    </div>
                                    <div>
                                        <label for="pris3"><p>Цена за час</p></label>
                                        <input id="pris3" name="price_1h_challenge" class="form-control"
                                               maxlength="50" value="{{$anketa->price_1h_challenge}}">
                                    </div>
                                    <div>
                                        <label for="pris4"><p>Цена за два</p></label>
                                        <input id="pris4" name="price_2h_challenge" class="form-control"
                                               value="{{$anketa->price_2h_challenge}}">
                                    </div>

                                </div>
                                <!--------------------------------------------------------------------------------------------------->
                                <!-------------------------------Услуги----------------------------------------------------------------->
                                <!------------------------------------------------------------------------------------------------------->
                                <div class=" form-group col-md-12 add_anketa_pris">

                                    <input multiple="multiple" name="photos[]" type="file" id="photos"  accept="image/png, image/jpeg" />

                                </div>

                                <div class="col-md-12">
                                    {{--<input multiple="multiple" name="photos[]" type="file" id="photos"  accept="image/png, image/jpeg" />--}}
                                    <div class="razmestit">
                                        <div class="razmestit_s">
                                            {{--<input type="submit" name="submit" value="create">--}}
                                            <button  type="submit">Обновить</button>
                                        </div>
                                    </div>
                                </div>

                                <!---------------------------------------------------------------------------------------------------------->
                            </form>
                        </div><!-- закрывает профиль бланк-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>



@endsection


