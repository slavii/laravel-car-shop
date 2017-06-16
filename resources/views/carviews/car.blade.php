@extends('layouts.app')

@section('title', 'Резултати')

@section('body')

    <link rel="stylesheet" href="css/car.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div class="thumbnail">

                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350"
                                     alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350"
                                     alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350"
                                     alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="caption-full">
                        <h4 class="pull-right">{{$car->price}} лв</h4>
                        <h4>{{$car->car_makes->name}} {{$car->car_models->name}}</h4>
                        <ul class="list-group">
                            <li class="list-group-item"><b>Състояние</b>&nbsp&nbsp{{$car->conditions->name}}</li>
                            <li class="list-group-item"><b>Производство</b>&nbsp&nbsp{{$car->year}} година</li>
                            <li class="list-group-item"><b>Мощност</b>&nbsp&nbsp{{$car->power}} к.с.</li>
                            <li class="list-group-item"><b>Пробег</b>&nbsp&nbsp{{$car->mileage}} км</li>
                            <li class="list-group-item"><b>Двигател</b>&nbsp&nbsp{{$car->fuels->name}}</li>
                            <li class="list-group-item"><b>Скоростна кутия</b>&nbsp&nbsp{{$car->gears->name}}</li>
                            <li class="list-group-item"><b>Тип</b>&nbsp&nbsp{{$car->bodies->name}}</li>
                            <li class="list-group-item"><b>Цвят</b>&nbsp&nbsp{{$car->colors->name}}</li>
                            <li class="list-group-item"><b>Брой врати</b>&nbsp&nbsp{{$car->doors->name}}</li>
                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
