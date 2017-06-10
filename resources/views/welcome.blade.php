@extends('layouts.app')

@section('title', 'Начална страница')

@section('home-active', 'active')

@section('body')

    <script src="js/loadModels.js"></script>

    <form class="form-horizontal" action="/findcar" method="post" enctype="multipart/form-data" id="form">
        {{csrf_field()}}

        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <h2 class="my-4">Начална страница</h2>
                    <div class="list-group">
                        <select class="list-group-item" name="Make" id="make">

                            <option value="">Марка</option>

                            @foreach($array['carMakes'] as $carMake)
                                <option value="{{$carMake->id}}">{{$carMake->name}}</option>
                            @endforeach

                        </select>

                        <select class="list-group-item" name="Model" id="model" disabled>
                            <option value="">Модел</option>
                        </select>

                        <select class="list-group-item" name="Price" id="price">
                            <option>Цена до</option>

                            @foreach (range(1000, 10000, 1000) as $price)
                                <option value="{{$price}}">{{$price}}лв</option>
                            @endforeach

                        </select>

                        <select class="list-group-item" name="Year" id="year">
                            <option value="">Година от</option>

                            {{--TODO: Create Service to check for the oldest and the newest car.--}}

                            @foreach (range(date("Y"), 1900, -1) as $year)
                                <option value="{{$year}}">{{$year}}</option>
                            @endforeach

                        </select>
                        <select class="list-group-item" name="Fuel" id="fuel">

                            <option value="">Двигател</option>

                            @foreach($array['fuels'] as $fuel)
                                <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                            @endforeach

                        </select>
                        <select class="list-group-item" name="Gears" id="gears">

                            <option value="">Скоростна кутия</option>

                            @foreach($array['gears'] as $gear)
                                <option value="{{$gear->id}}">{{$gear->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <br>
                    <div class="list-group button-list">
                        <input type="button" class="list-group-item btn-primary" value="Търсене" name="Search"
                               id="search">
                        <a href="/findcar" class="list-group-item btn-secondary" name="Advenced-Search"
                           id="advanced-search">Подробно търсене</a>
                    </div>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
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

                    <div class="row">

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400"
                                                 alt=""></a>
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#">Item One</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                        numquam
                                        aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400"
                                                 alt=""></a>
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#">Item Two</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                        numquam
                                        aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400"
                                                 alt=""></a>
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#">Item Three</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                        numquam
                                        aspernatur!</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
    </form>

@endsection