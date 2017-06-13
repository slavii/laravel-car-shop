@extends('layouts.app')

@section('title', 'Подробно търсене')

@section('search-active', 'active')

@section('body')

    <script src="js/loadmodels.js"></script>
    <script src="js/findcar.js"></script>

    <link rel="stylesheet" href="css/findcar.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>

    <div class="container">

        <form class="form-horizontal" action="/findcar" method="post" enctype="multipart/form-data" id="form">
            {{csrf_field()}}

            <div class="row">

                <div class="col-lg-6">

                    <h2 class="my-4">Търсене на обява</h2>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-3">

                    <div class="list-group">

                        <select class="form-control" name="Make" id="make">

                            <option class="my-class" value="">Марка</option>

                            @foreach($array['carMakes'] as $carMake)
                                <option value="{{$carMake->id}}">{{$carMake->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="Model" id="model" disabled>
                            <option value="">Модел</option>
                        </select>

                        <select class="form-control" name="Condition" id="condition">

                            <option value="">Състояние</option>

                            @foreach($array['conditions'] as $condition)
                                <option value="{{$condition->id}}">{{$condition->name}}</option>
                            @endforeach

                        </select>

                        <div class="row">

                            <div class="col-lg-6">

                                <input type="number" class="form-control double-column" name="PriceFrom" id="price-from"
                                       placeholder="Цена от">
                            </div>

                            <div class="col-lg-6">

                                <input type="number" class="form-control double-column" name="PriceTo" id="price-to"
                                       placeholder="Цена до">

                            </div>

                        </div>

                        <select class="form-control" name="Year" id="year">

                            <option value="">Година</option>

                            @foreach (range(date("Y"), 1900, -1) as $year)
                                <option value="{{$year}}">{{$year}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="Fuel" id="fuel">

                            <option value="">Двигател</option>

                            @foreach($array['fuels'] as $fuel)
                                <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                            @endforeach

                        </select>

                        <div class="row">

                            <div class="col-lg-6">

                                <input type="number" class="form-control" name="PowerFrom" id="power-from"
                                       placeholder="К.С. от">
                            </div>

                            <div class="col-lg-6">

                                <input type="number" class="form-control" name="PowerTo" id="power-to"
                                       placeholder="К.С. до">

                            </div>

                        </div>

                        <select class="form-control" name="Gears" id="gears">

                            <option value="">Скоростна кутия</option>

                            @foreach($array['gears'] as $gear)
                                <option value="{{$gear->id}}">{{$gear->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="Body" id="body">

                            <option value="">Категория</option>

                            @foreach($array['bodies'] as $body)
                                <option value="{{$body->id}}">{{$body->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="Color" id="color">

                            <option value="">Цвят</option>

                            @foreach($array['colors'] as $color)
                                <option value="{{$color->id}}">{{$color->name}}</option>
                            @endforeach

                        </select>

                        <div class="row">

                            <div class="col-lg-6">

                                <input type="number" class="form-control" name="MileageFrom" id="mileage-from"
                                       placeholder="Пробег от">
                            </div>

                            <div class="col-lg-6">

                                <input type="number" class="form-control" name="MileageTo" id="mileage-to"
                                       placeholder="Пробег до">

                            </div>

                        </div>

                        <select class="form-control" name="Region" id="region">

                            <option value="">Област</option>

                            @foreach($array['regions'] as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach

                        </select>

                        <select class="form-control" name="Doors" id="doors">

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

                        <select class="form-control" name="Equipments" id="equipments" size="25" multiple>

                            @foreach($array['equipments'] as $equipment)
                                <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="col-lg-4">

                    <label for="sort-by" style="font-weight: bold; font-size: 18px;">

                        Сортиране по

                    </label>

                    <select class="form-control" name="SortBy" id="sort-by">
                        <option value="1">Цена - възходящо</option>
                        <option value="2">Цена - низходящо</option>
                        <option value="3">Най-новите обяви</option>
                        <option value="4">Година на производство - възходящо</option>
                        <option value="5">Година на производство - възходящо</option>
                        <option value="6">Пробег - възходящо</option>
                        <option value="7">Пробег - низходящо</option>
                        <option value="8">Мощност - възходящо</option>
                        <option value="9">Мощност - низходящо</option>

                    </select>

                    <input type="submit" class="button btn-success form-control" name="submit" id="submit"
                           value="Търсене">

                    <input type="reset" class="button form-control" name="Reset" id="reset"
                           value="Изчистване">

                </div>


            </div>

        </form>

    </div>

@endsection