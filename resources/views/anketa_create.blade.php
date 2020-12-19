@extends('layouts.app')

@section('title-block')
    Добавить анкету
@endsection

@section('content')

    <div class="container">       
        <div class="container border">
            <div class="add_profil border">

                <div class="col-md-12 ut">

                    <div class="col-md-9  blank border">
                       
                        <div class="profil_blank">
                            <div class="zagolovok">
                                <h3>Новая анкета</h3>
                            </div>
                            

                            <div class="pravila_add_anketa">
                                <p> Прочитайте пожалуйста правила размещения анкет на сайте <a href="#"> здесь</a>
                                </p>
                            </div>
                            <!------------------------------------------------Форма-------------------------------------------------->
                            <form   enctype="multipart/form-data"   action="" method="post" class="profil_form">
                                @csrf

                                <div class="col-md-4 add_anketa_type ">
                                    <label for="type">Тип анкеты</label>
                                    <select id="type" class="form-control" name="type">

                                        @foreach($types as $type )
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" form-group col-md-12 add_anketa_name">
                                    <div>
                                        <label for="type"><p>Имя</p></label>
                                        <input id="profil_name" name="profil_name" class="form-control"
                                               maxlength="50">
                                    </div>
                                    <div>
                                        <label for="type"><p>Возраст</p></label>
                                        <input id="profil_age" name="age" class="form-control">
                                    </div>
                                    <div>
                                        <label for="type"><p>Телефон</p></label>
                                        <input id="profil_tel" name="tel" class="form-control"
                                               placeholder="+79998887766">
                                    </div>
                                </div>
                                <div class=" form-group col-md-12 add_anketa_city">
                                    <div>
                                        <label for="сity">Город</label>
                                        <select id="сity" class="form-control" name="id_city">
                                            @foreach($cities as $city )
                                                <option value="{{$city->id}}">{{$city->name}}</option>
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
                                                    <option value="{{$metro->id}}">{{$metro->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endfor

                                </div>

                                <div class=" form-group col-md-12 about_my1">
                                    <div class=" about_my2">
                                        <p><label> Обо мне</label></p>
                                        <textarea name="about_me"> </textarea>
                                    </div>
                                </div>

                                <!-------------------------------------------------------------------------------------------------->

                                <!-------------------------------------------Образование------------------------------------------------------->

                                <div class="col-md-12 add_anketa_education ">
                                    <div>
                                        <label for="education">Образование</label>
                                        <select id="education" class="form-control" name="id_education">
                                            @foreach($educations as $education)
                                                <option value="{{$education->id}}">{{$education->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label for="experience">опыт</label>
                                        <select id="experience" class="form-control" name="id_experience">
                                            @foreach($experiences as $experience )
                                                <option value="{{$experience->id}}">{{$experience->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                               

                                <div class=" form-group col-md-12 add_anketa_pris">
                                    <div>

                                        <label for="pris"><b>Принимаю у себя</b></label>
                                    </div>
                                    <div>
                                        <label for="pris"><p>Цена за час</p></label>
                                        <input id="pris" class="form-control" name="price_1h_office" maxlength="50">
                                    </div>
                                    <div>
                                        <label for="pris2"><p>Цена за два</p></label>
                                        <input id="pris2" class="form-control" name="price_2h_office"
                                               maxlength="50">
                                    </div>
                                </div>
                                <div class=" form-group col-md-12 add_anketa_pris">
                                    <div>
                                        <label for="pris"> <b> Выезд к Вам на дом</b></label>
                                    </div>
                                    <div>
                                        <label for="pris3"><p>Цена за час</p></label>
                                        <input id="pris3" name="price_1h_challenge" class="form-control"
                                               maxlength="50">
                                    </div>
                                    <div>
                                        <label for="pris4"><p>Цена за два</p></label>
                                        <input id="pris4" name="price_2h_challenge" class="form-control">
                                    </div>

                                </div>
                               
                                <div class="col-md-12">
                                        <div class="choose_service "> 
                                            <h4>Выберите Ваши услуги</h4>
                                        </div>
                                        @foreach($services->chunk(15) as $part_services)                                            
                                            <div class="choose">
                                                    <div class="col-md-6 ">  
                                                        @foreach($part_services as $service)                                                     
                                                            <div>
                                                                <input type="checkbox" name="services[]" value="{{$service->id}}">
                                                                <label for="pris"><i> {{$service->name}} </i></label>
                                                            </div>
                                                        @endforeach              
                                                    </div>
                                            </div>  
                                        @endforeach

                                </div>   


                                <div class=" form-group col-md-12 add_anketa_pris">
                                    <input multiple="multiple" name="photos[]" type="file" id="photos"  accept="image/png, image/jpeg" />
                                </div>

                                <div class="col-md-12">
                                    {{--<input multiple="multiple" name="photos[]" type="file" id="photos"  accept="image/png, image/jpeg" />--}}
                                    <div class="razmestit">
                                        <div class="razmestit_s">
                                            {{--<input type="submit" name="submit" value="create">--}}
                                            <button  type="submit">create</button>
                                        </div>
                                    </div>
                                </div>

                             
                            </form>
                        </div><!-- закрывает профиль бланк-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>



@endsection


