@extends('layouts.app')

@section('title-block')
Головна
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="content">

            <div class="search_info">
                <div class="search">
                    <form name="search" action="" method="get">


                        <div class="row">
                            <div class="col-lg-9 col-md-12 ">
                                <div class="search">
                                    <div class="col-md-3 col-sm-6 ">
                                        <label for="сity">Город</label>
                                        <select id="сity" class="form-control" name="city_id">

                                            @if(empty($params['city_id'])){
                                            <option value="" selected>Не выбранно</option>
                                            @else
                                            <option value="">Не выбранно</option>
                                            @endif

                                            @foreach($cities as $city)
                                            @if(!empty($params['city_id']) && $params['city_id']==$city->id)
                                            <option value="{{$city->id}}" selected>{{$city->name}}</option>
                                            @else
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endif
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="clearfix"></div>
                        <div class="row ">
                            <div class="search2">
                                <div class=" col-md-12 ">

                                    <div class="col-md-4 col-sm-6 ">
                                        <label for="type">Тип</label>
                                        <select id="type" class="form-control" name="type_id">

                                            @if(empty($params['type_id']))
                                            <option value="" selected>Не выбранно</option>
                                            @else
                                            <option value="">Не выбранно</option>
                                            @endif

                                            @foreach($types as $type)
                                            @if(!empty($params['type_id']) && $params['type_id']==$type->id)
                                            <option value="{{$type->id}}" selected>{{$type->name}}</option>;
                                            @else
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endif
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix"></div>
                        <div class="row ">
                            <div class="search2">
                                <div class=" col-md-12 ">

                                    <div class="col-md-4 col-sm-6 ">
                                        <label for="experience">Досвід</label>
                                        <select id="experience" class="form-control" name="experience_id">

                                            @if(empty($params['experience_id']))
                                            <option value="" selected>Не выбранно</option>
                                            @else
                                            <option value="">Не выбранно</option>
                                            @endif

                                            @foreach($list_experience as $experience)
                                            @if(!empty($params['experience_id']) &&
                                            $params['experience_id']==$experience->id)
                                            <option value="{{$experience->id}}" selected>{{$experience->name}}</option>;
                                            @else
                                            <option value="{{$experience->id}}">{{$experience->name}}</option>
                                            @endif
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="clearfix"></div>
                        <div class="row ">
                            <div class="search2">
                                <div class=" col-md-12 ">

                                    <div class="col-md-4 col-sm-6 ">
                                        <label for="education_id">Досвід</label>
                                        <select id="education_id" class="form-control" name="education_id">

                                            @if(empty($params['education_id']))
                                            <option value="" selected>Не выбранно</option>
                                            @else
                                            <option value="">Не выбранно</option>
                                            @endif

                                            @foreach($educations as $education)
                                            @if(!empty($params['education_id']) &&
                                            $params['education_id']==$education->id)
                                            <option value="{{$education->id}}" selected>{{$education->name}}</option>;
                                            @else
                                            <option value="{{$education->id}}">{{$education->name}}</option>
                                            @endif
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>








                        <div class="row ">
                            <div class=" col-md-12 ">

                                <div class="search3">
                                    <div class="poisk">
                                        <button class="btn btn-info"> Поиск</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="anketas">
                @foreach($anketas as $anketa)
                @if($anketa->photo==null)
                @continue;
                @endif

                <div class="list">
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


@endsection
