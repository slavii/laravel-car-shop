@extends('layouts.app')

@section('title', 'Резултат')

@section('body')

    <link rel="stylesheet" href="/css/car.css">
    <script src="/js/car.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKp7GNvuHZ6tD_iNNRbRZWEKK_jWS0Yhs&callback=initMap">
    </script>

    <div class="container">

        <form class="form-horizontal" action="/updateLocation" method="post" enctype="multipart/form-data" id="form">
            {{csrf_field()}}

            <div class="row">

                <div class="col-lg-12">

                    <div class="thumbnail">

                        <div class="">
                            <h3>{{$car->car_makes->name}} {{$car->car_models->name}}</h3>
                            <h5>Цена {{$car->price}} лв</h5>

                            <div class="row">

                                <div class="col-lg-4">

                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <b>Състояние</b>&nbsp&nbsp{{$car->conditions->name}}
                                        </li>
                                        <li class="list-group-item"><b>Производство</b>&nbsp&nbsp{{$car->year}}
                                            година
                                        </li>
                                        <li class="list-group-item"><b>Мощност</b>&nbsp&nbsp{{$car->power}} к.с.
                                        </li>
                                        <li class="list-group-item"><b>Пробег</b>&nbsp&nbsp{{$car->mileage}} км</li>
                                        <li class="list-group-item"><b>Двигател</b>&nbsp&nbsp{{$car->fuels->name}}
                                        </li>
                                        <li class="list-group-item"><b>Скоростна
                                                кутия</b>&nbsp&nbsp{{$car->gears->name}}
                                        </li>
                                        <li class="list-group-item"><b>Тип</b>&nbsp&nbsp{{$car->bodies->name}}</li>
                                        <li class="list-group-item"><b>Цвят</b>&nbsp&nbsp{{$car->colors->name}}</li>
                                        <li class="list-group-item"><b>Брой врати</b>&nbsp&nbsp{{$car->doors->name}}
                                        </li>
                                        <li class="list-group-item" id="region">
                                            <b>Регион</b>&nbsp&nbsp{{$car->regions->name}}
                                        </li>
                                    </ul>

                                </div>

                                <div class="col-lg-3">

                                    <div class="" id="equipments">

                                        <ul class="list-group">

                                            @if($car->equipments->all())

                                                <h5>Допълнителни опции</h5>

                                                @foreach($car->equipments->all() as $equipment)

                                                    <li class="list-group-item equipments">{{$equipment->name}}</li>

                                                @endforeach

                                            @endif
                                        </ul>

                                    </div>

                                </div>

                                <div class="col-lg-4">

                                    <div class="" id="map"></div>

                                </div>

                            </div>

                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">

                            <ol class="carousel-indicators">

                                @foreach($car->images->all() as $key => $image)


                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"
                                        class="@if($key == 0) {{'active'}} @endif"></li>


                                @endforeach

                            </ol>

                            <div class="carousel-inner" role="listbox">

                                @foreach($car->images->all() as $key => $image)

                                    <div class="carousel-item @if($key == 0) {{'active'}} @endif">
                                        <img class="d-block img-fluid" src="/assets/images/{{$image->name}}">
                                    </div>

                                @endforeach

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

                    </div>

                </div>

            </div>

        </form>

    </div>

@endsection
