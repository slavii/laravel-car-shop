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

                                <a href="#"><img class="card-img-top img-fluid" src="http://placehold.it/700x400"
                                                 alt=""></a>
                                <div class="card-block">
                                    <h4 class="card-title"><a
                                                href="#">{{$car->car_makes->name . ' ' . $car->car_models->name}}</a>
                                    </h4>
                                    <h5>{{$car->price}} лв</h5>
                                    {{--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet--}}
                                        {{--numquam--}}
                                        {{--aspernatur!</p>--}}
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{\Carbon\Carbon::now()->diffForHumans($car->created_at)}}</small>
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection
