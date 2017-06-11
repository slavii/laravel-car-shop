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
    <script>
        function preview_images() {
            var total_file = document.getElementById("images").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append("<div class='col-md-4 form-control'><img class='img-responsive' style='max-width: 100%' src='" + URL.createObjectURL(event.target.files[i]) + "'></div>");
            }
        }
    </script>

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

                        <input type="number" class="form-control" name="Price" id="price" placeholder="Цена">

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

                        <input type="number" step="100" class="form-control" name="Power" id="power"
                               placeholder="Мощност">

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

                        <input type="number" step="100" class="form-control" name="Mileage" id="mileage"
                               placeholder="Пробег">

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


                    <h4 class="">Прикачване на снимки</h4>

                    <form action="multiupload.php" method="post" enctype="multipart/form-data">

                        <input type="file" class="form-control" id="images" name="images[]"
                               onchange="preview_images();" multiple/>

                        <div class="row" id="image_preview"></div>

                        <input type="submit" class="btn btn-primary form-control" name='submit_image'
                               value="Качване на снимките"/>

                    </form>

                </div>


            </div>

        </form>

    </div>

@endsection