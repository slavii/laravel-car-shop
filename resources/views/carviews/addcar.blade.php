@extends('layouts.app')

@section('title', 'Публикувай обява')

@section('sell-active', 'active')

@section('body')

    <script src="js/loadmodels.js"></script>
    <script src="js/addcar.js"></script>

    <link rel="stylesheet" href="css/addcar.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>

    <div class="container">

        <form class="form-horizontal" action="/addcar" method="post" enctype="multipart/form-data" id="form">
            {{csrf_field()}}

            <div class="row">

                <div class="col-lg-6">

                    <h2 class="my-4">Публикуване на обява</h2>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-3">

                    <div class="list-group">

                        <select class="form-control" name="make" id="make">

                            <option class="my-class" value="">Марка</option>

                            @foreach($array['carMakes'] as $carMake)
                                <option value="{{$carMake->id}}">{{$carMake->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="model" id="model" disabled>
                            <option value="">Модел</option>
                        </select>

                        <select class="form-control" name="condition" id="condition">

                            <option value="">Състояние</option>

                            @foreach($array['conditions'] as $condition)
                                <option value="{{$condition->id}}">{{$condition->name}}</option>
                            @endforeach

                        </select>

                        <input type="number" class="form-control" name="price" id="price" placeholder="Цена">

                        <select class="form-control" name="year" id="year">

                            <option value="">Година</option>

                            @foreach (range(date("Y"), 1900, -1) as $year)
                                <option value="{{$year}}">{{$year}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="fuel" id="fuel">

                            <option value="">Двигател</option>

                            @foreach($array['fuels'] as $fuel)
                                <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                            @endforeach

                        </select>

                        <input type="number" step="100" class="form-control" name="power" id="power"
                               placeholder="Мощност /к.с./">

                        <select class="form-control" name="gears" id="gears">

                            <option value="">Скоростна кутия</option>

                            @foreach($array['gears'] as $gear)
                                <option value="{{$gear->id}}">{{$gear->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="body" id="body">

                            <option value="">Категория</option>

                            @foreach($array['bodies'] as $body)
                                <option value="{{$body->id}}">{{$body->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="color" id="color">

                            <option value="">Цвят</option>

                            @foreach($array['colors'] as $color)
                                <option value="{{$color->id}}">{{$color->name}}</option>
                            @endforeach

                        </select>

                        <input type="number" step="100" class="form-control" name="mileage" id="mileage"
                               placeholder="Пробег">

                        <select class="form-control" name="region" id="region">

                            <option value="">Област</option>

                            @foreach($array['regions'] as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="doors" id="doors">

                            <option value="">Брой врати</option>

                            @foreach($array['doors'] as $door)
                                <option value="{{$door->id}}">{{$door->name}}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">

                        <h4 class="panel-heading">Допълнителни опции</h4>

                        <select class="form-control" name="equipments[]" id="equipments" size="25" multiple="multiple"
                                data-toggle="dropdown">

                            @foreach($array['equipments'] as $equipment)
                                <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-lg-4">


                    <h4 class="">Прикачване на снимки</h4>

                    <input type="file" class="form-control" id="images" name="images[]" multiple/>

                    <input type="submit" class="button btn-success form-control" name="submit" id="submit"
                           value="Публикуване на обява">

                    <div class="form-control alert-danger hidden" id="result"></div>

                        {{--@if ($errors->any())--}}
                        {{--{{ implode('', $errors->all(':message')) }}--}}
                        {{--@endif--}}

                        @if(count($errors)>0)

                            @foreach($errors->all() as $error)
                                {{--<div class="form-control alert-danger hidden" id="result">{{$error}}</div>--}}
                                {{$error}} <br>
                            @endforeach

                        @endif

                    <input type="reset" class="button form-control" name="Reset" id="reset"
                           value="Изчистване">

                </div>


            </div>

        </form>

    </div>

@endsection