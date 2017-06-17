@extends('layouts.app')

@section('title', 'Резултати')

@section('body')

    <link rel="stylesheet" href="css/results.css">

    {{--<div class="sc-content-container">--}}
    {{--@foreach($images as $image)--}}
    {{--<img src="{{ URL::to('assets/images/' . $image) }}" alt="{{ $image }}" />--}}
    {{--@endforeach--}}
    {{--</div>--}}

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="row">

                    @foreach($cars as $car)

                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card h-100">

                                @if($car->images->all())

                                    <a href="/car{{$car->id}}"><img class="card-img-top img-fluid"
                                                                    src="assets/images/{{$car->images[0]->name}}"
                                                                    alt=""></a>

                                @else

                                    <a href="/car{{$car->id}}"><img class="card-img-top img-fluid"
                                                                    src="assets/other/no-image.jpg"
                                                                    alt=""></a>

                                @endif

                                <div class="card-block">
                                    <h5 class="pull-right">{{$car->price}} лв</h5>
                                    <h4 class="card-title"><a
                                                href="/car{{$car->id}}">{{$car->car_makes->name . ' ' . $car->car_models->name}}</a>
                                    </h4>
                                    <span class="card-text"><b>Състояние</b> {{$car->conditions->name}}</span>
                                    <br>
                                    <span class="card-text"><b>Регион</b> {{$car->regions->name}}</span>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{$car->created_at->diffForHumans()}}</small>
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection
