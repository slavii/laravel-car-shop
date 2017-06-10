@extends('layouts.app')

@section('title', 'Публикувай обява')

@section('sell-active', 'active')

@section('body')

    <script src="js/loadmodels.js"></script>

    <link rel="stylesheet" href="css/addcar.css">

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

                    </div>

                </div>

                {{--<div class="col-lg-3 col-lg-offset-3">--}}

                {{--<div class="list-group">--}}


                {{--</div>--}}

                {{--</div>--}}

            </div>

        </form>

    </div>





    {{--<fieldset>--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-3">--}}
    {{--<select class="form-control" name="make" id="make">--}}
    {{--<option value="">Марка</option>--}}
    {{--<optgroup label="A"/>--}}
    {{--<option value="AC">AC</option>--}}
    {{--<option value="Acura">Acura</option>--}}
    {{--<option value="Aixam">Aixam</option>--}}
    {{--<option value="Alfa romeo">Alfa romeo</option>--}}
    {{--<option value="Aston martin">Aston martin</option>--}}
    {{--<option value="Audi">Audi</option>--}}
    {{--<option value="Austin">Austin</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="B">--}}
    {{--<option value="Bentley">Bentley</option>--}}
    {{--<option value="Berliner">Berliner</option>--}}
    {{--<option value="Bmw">Bmw</option>--}}
    {{--<option value="Borgward">Borgward</option>--}}
    {{--<option value="Brilliance">Brilliance</option>--}}
    {{--<option value="Bugatti">Bugatti</option>--}}
    {{--<option value="Buick">Buick</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="C">--}}
    {{--<option value="Cadillac">Cadillac</option>--}}
    {{--<option value="Chevrolet">Chevrolet</option>--}}
    {{--<option value="Chrysler">Chrysler</option>--}}
    {{--<option value="Citroen">Citroen</option>--}}
    {{--<option value="Corvette">Corvette</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="D">--}}
    {{--<option value="Dacia">Dacia</option>--}}
    {{--<option value="Daewoo">Daewoo</option>--}}
    {{--<option value="Daihatsu">Daihatsu</option>--}}
    {{--<option value="Daimler">Daimler</option>--}}
    {{--<option value="Datsun">Datsun</option>--}}
    {{--<option value="Dkw">Dkw</option>--}}
    {{--<option value="Dodge">Dodge</option>--}}
    {{--<option value="Dr">Dr</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="E">--}}
    {{--<option value="Eagle">Eagle</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="F">--}}
    {{--<option value="FSO">FSO</option>--}}
    {{--<option value="Ferrari">Ferrari</option>--}}
    {{--<option value="Fiat">Fiat</option>--}}
    {{--<option value="Ford">Ford</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="G">--}}
    {{--<option value="Geo">Geo</option>--}}
    {{--<option value="Great Wall">Great Wall</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="H">--}}
    {{--<option value="Heinkel">Heinkel</option>--}}
    {{--<option value="Honda">Honda</option>--}}
    {{--<option value="Hyundai">Hyundai</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="I">--}}
    {{--<option value="Ifa">Ifa</option>--}}
    {{--<option value="Infiniti">Infiniti</option>--}}
    {{--<option value="Innocenti">Innocenti</option>--}}
    {{--<option value="Isuzu">Isuzu</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="J">--}}
    {{--<option value="Jaguar">Jaguar</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="K">--}}
    {{--<option value="Kia">Kia</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="L">--}}
    {{--<option value="Lada">Lada</option>--}}
    {{--<option value="Lamborghini">Lamborghini</option>--}}
    {{--<option value="Lancia">Lancia</option>--}}
    {{--<option value="Lexus">Lexus</option>--}}
    {{--<option value="Lifan">Lifan</option>--}}
    {{--<option value="Lincoln">Lincoln</option>--}}
    {{--<option value="Lotus">Lotus</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="M">--}}
    {{--<option value="Maserati">Maserati</option>--}}
    {{--<option value="Matra">Matra</option>--}}
    {{--<option value="Maybach">Maybach</option>--}}
    {{--<option value="Mazda">Mazda</option>--}}
    {{--<option value="McLaren">McLaren</option>--}}
    {{--<option value="Mercedes">Mercedes</option>--}}
    {{--<option value="Mercury">Mercury</option>--}}
    {{--<option value="Mg">Mg</option>--}}
    {{--<option value="Mini">Mini</option>--}}
    {{--<option value="Mitsubishi">Mitsubishi</option>--}}
    {{--<option value="Morgan">Morgan</option>--}}
    {{--<option value="Moskvich">Moskvich</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="N">--}}
    {{--<option value="Nissan">Nissan</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="O">--}}
    {{--<option value="Oldsmobile">Oldsmobile</option>--}}
    {{--<option value="Opel">Opel</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="P">--}}
    {{--<option value="Perodua">Perodua</option>--}}
    {{--<option value="Peugeot">Peugeot</option>--}}
    {{--<option value="Pgo">Pgo</option>--}}
    {{--<option value="Plymouth">Plymouth</option>--}}
    {{--<option value="Polonez">Polonez</option>--}}
    {{--<option value="Pontiac">Pontiac</option>--}}
    {{--<option value="Porsche">Porsche</option>--}}
    {{--<option value="Proton">Proton</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="R">--}}
    {{--<option value="Renault">Renault</option>--}}
    {{--<option value="Rolls-Royce">Rolls-Royce</option>--}}
    {{--<option value="Rover">Rover</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="S">--}}
    {{--<option value="SECMA">SECMA</option>--}}
    {{--<option value="Saab">Saab</option>--}}
    {{--<option value="Samand">Samand</option>--}}
    {{--<option value="Saturn">Saturn</option>--}}
    {{--<option value="Scion">Scion</option>--}}
    {{--<option value="Seat">Seat</option>--}}
    {{--<option value="Shatenet">Shatenet</option>--}}
    {{--<option value="Shuanghuan">Shuanghuan</option>--}}
    {{--<option value="Simca">Simca</option>--}}
    {{--<option value="Skoda">Skoda</option>--}}
    {{--<option value="Smart">Smart</option>--}}
    {{--<option value="Ssang yong">Ssang yong</option>--}}
    {{--<option value="Subaru">Subaru</option>--}}
    {{--<option value="Suzuki">Suzuki</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="T">--}}
    {{--<option value="Talbot">Talbot</option>--}}
    {{--<option value="Tata">Tata</option>--}}
    {{--<option value="Tavria">Tavria</option>--}}
    {{--<option value="Tazzari">Tazzari</option>--}}
    {{--<option value="Terberg">Terberg</option>--}}
    {{--<option value="Tesla">Tesla</option>--}}
    {{--<option value="Tofas">Tofas</option>--}}
    {{--<option value="Toyota">Toyota</option>--}}
    {{--<option value="Trabant">Trabant</option>--}}
    {{--<option value="Triumph">Triumph</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="V">--}}
    {{--<option value="VROMOS">VROMOS</option>--}}
    {{--<option value="Volga">Volga</option>--}}
    {{--<option value="Volvo">Volvo</option>--}}
    {{--<option value="Vw">Vw</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="W">--}}
    {{--<option value="Warszawa">Warszawa</option>--}}
    {{--<option value="Wartburg">Wartburg</option>--}}
    {{--<option value="Wiesmann">Wiesmann</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="X">--}}
    {{--<option value="Xinshun">Xinshun</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="Z">--}}
    {{--<option value="Zastava">Zastava</option>--}}
    {{--<option value="Zaz">Zaz</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="Д">--}}
    {{--<option value="Други">Други</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="П">--}}
    {{--<option value="Победа">Победа</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="С">--}}
    {{--<option value="София">София</option>--}}
    {{--</optgroup>--}}

    {{--<optgroup label="Ч">--}}
    {{--<option value="Чайка">Чайка</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2">--}}
    {{--<select class="form-control" name="model" id="model" disabled>--}}
    {{--<option value="">Модел</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-3">--}}
    {{--<select class="form-control" name="year" id="year">--}}
    {{--<option value="">Година на производство</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2">--}}
    {{--<input type="number" class="form-control" value="" step="100" min="0" name="price" id="price" placeholder="Цена (0 - по договаряне)"/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-3">--}}
    {{--<select class="form-control" name="fuel" id="fuel">--}}
    {{--<option value="">Тип гориво</option>--}}
    {{--<option value="Gasoline">Бензин</option>--}}
    {{--<option value="Diesel">Дизел</option>--}}
    {{--<option value="Hybrid">Хибрид</option>--}}
    {{--<option value="Other">Друго</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2">--}}
    {{--<input type="number" class="form-control" value="" min="0" step="10" name="power" id="power"--}}
    {{--placeholder="Мощност (к.с.)">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-3 text-center">--}}
    {{--<label class="radio-inline">--}}
    {{--<input type="radio" name="condition" id="conditionNew" value="New"> Нов--}}
    {{--</label>--}}
    {{--<label class="radio-inline">--}}
    {{--<input type="radio" name="condition" id="conditionUsed" value="Used" checked> Употребяван--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2 text-center">--}}
    {{--<input type="file" name="file[]" id="file" multiple>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<br>--}}
    {{--<div class="row">--}}
    {{--<div class="alert alert-danger col col-lg-2 col-lg-offset-4 text-center hidden" id="result"></div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-4 text-center">--}}
    {{--<button type="submit" class="btn btn-success" name="submit" id="submit">Запис</button>--}}
    {{--<button type="reset" class="btn btn-default">Изчисти</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</fieldset>--}}
    {{--</form>--}}
    <br>
    {{--@if(count($errors)>0)--}}
    {{--<div class="alert alert-danger col col-lg-2 col-lg-offset-4 text-center">--}}
    {{--@foreach($errors->all() as $error)--}}
    {{--{{$error}} <br>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    {{--@endif--}}



@endsection