@extends('layouts.app')

@section('title', 'Начална страница')

@section('home-active', 'active')

@section('body')

    <script src="js/welcome.js"></script>

    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h2 class="my-4">Търсене</h2>
                <div class="list-group">
                    <select class="list-group-item" name="Make" id="make">
                        <option value="">Марка</option>
                        <optgroup label="A"/>
                        <option value="AC">AC</option>
                        <option value="Acura">Acura</option>
                        <option value="Aixam">Aixam</option>
                        <option value="Alfa romeo">Alfa romeo</option>
                        <option value="Aston martin">Aston martin</option>
                        <option value="Audi">Audi</option>
                        <option value="Austin">Austin</option>
                        </optgroup>

                        <optgroup label="B">
                            <option value="Bentley">Bentley</option>
                            <option value="Berliner">Berliner</option>
                            <option value="Bmw">Bmw</option>
                            <option value="Borgward">Borgward</option>
                            <option value="Brilliance">Brilliance</option>
                            <option value="Bugatti">Bugatti</option>
                            <option value="Buick">Buick</option>
                        </optgroup>

                        <optgroup label="C">
                            <option value="Cadillac">Cadillac</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Chrysler">Chrysler</option>
                            <option value="Citroen">Citroen</option>
                            <option value="Corvette">Corvette</option>
                        </optgroup>

                        <optgroup label="D">
                            <option value="Dacia">Dacia</option>
                            <option value="Daewoo">Daewoo</option>
                            <option value="Daihatsu">Daihatsu</option>
                            <option value="Daimler">Daimler</option>
                            <option value="Datsun">Datsun</option>
                            <option value="Dkw">Dkw</option>
                            <option value="Dodge">Dodge</option>
                            <option value="Dr">Dr</option>
                        </optgroup>

                        <optgroup label="E">
                            <option value="Eagle">Eagle</option>
                        </optgroup>

                        <optgroup label="F">
                            <option value="FSO">FSO</option>
                            <option value="Ferrari">Ferrari</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Ford">Ford</option>
                        </optgroup>

                        <optgroup label="G">
                            <option value="Geo">Geo</option>
                            <option value="Great Wall">Great Wall</option>
                        </optgroup>

                        <optgroup label="H">
                            <option value="Heinkel">Heinkel</option>
                            <option value="Honda">Honda</option>
                            <option value="Hyundai">Hyundai</option>
                        </optgroup>

                        <optgroup label="I">
                            <option value="Ifa">Ifa</option>
                            <option value="Infiniti">Infiniti</option>
                            <option value="Innocenti">Innocenti</option>
                            <option value="Isuzu">Isuzu</option>
                        </optgroup>

                        <optgroup label="J">
                            <option value="Jaguar">Jaguar</option>
                        </optgroup>

                        <optgroup label="K">
                            <option value="Kia">Kia</option>
                        </optgroup>

                        <optgroup label="L">
                            <option value="Lada">Lada</option>
                            <option value="Lamborghini">Lamborghini</option>
                            <option value="Lancia">Lancia</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Lifan">Lifan</option>
                            <option value="Lincoln">Lincoln</option>
                            <option value="Lotus">Lotus</option>
                        </optgroup>

                        <optgroup label="M">
                            <option value="Maserati">Maserati</option>
                            <option value="Matra">Matra</option>
                            <option value="Maybach">Maybach</option>
                            <option value="Mazda">Mazda</option>
                            <option value="McLaren">McLaren</option>
                            <option value="Mercedes">Mercedes</option>
                            <option value="Mercury">Mercury</option>
                            <option value="Mg">Mg</option>
                            <option value="Mini">Mini</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Morgan">Morgan</option>
                            <option value="Moskvich">Moskvich</option>
                        </optgroup>

                        <optgroup label="N">
                            <option value="Nissan">Nissan</option>
                        </optgroup>

                        <optgroup label="O">
                            <option value="Oldsmobile">Oldsmobile</option>
                            <option value="Opel">Opel</option>
                        </optgroup>

                        <optgroup label="P">
                            <option value="Perodua">Perodua</option>
                            <option value="Peugeot">Peugeot</option>
                            <option value="Pgo">Pgo</option>
                            <option value="Plymouth">Plymouth</option>
                            <option value="Polonez">Polonez</option>
                            <option value="Pontiac">Pontiac</option>
                            <option value="Porsche">Porsche</option>
                            <option value="Proton">Proton</option>
                        </optgroup>

                        <optgroup label="R">
                            <option value="Renault">Renault</option>
                            <option value="Rolls-Royce">Rolls-Royce</option>
                            <option value="Rover">Rover</option>
                        </optgroup>

                        <optgroup label="S">
                            <option value="SECMA">SECMA</option>
                            <option value="Saab">Saab</option>
                            <option value="Samand">Samand</option>
                            <option value="Saturn">Saturn</option>
                            <option value="Scion">Scion</option>
                            <option value="Seat">Seat</option>
                            <option value="Shatenet">Shatenet</option>
                            <option value="Shuanghuan">Shuanghuan</option>
                            <option value="Simca">Simca</option>
                            <option value="Skoda">Skoda</option>
                            <option value="Smart">Smart</option>
                            <option value="Ssang yong">Ssang yong</option>
                            <option value="Subaru">Subaru</option>
                            <option value="Suzuki">Suzuki</option>
                        </optgroup>

                        <optgroup label="T">
                            <option value="Talbot">Talbot</option>
                            <option value="Tata">Tata</option>
                            <option value="Tavria">Tavria</option>
                            <option value="Tazzari">Tazzari</option>
                            <option value="Terberg">Terberg</option>
                            <option value="Tesla">Tesla</option>
                            <option value="Tofas">Tofas</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Trabant">Trabant</option>
                            <option value="Triumph">Triumph</option>
                        </optgroup>

                        <optgroup label="V">
                            <option value="VROMOS">VROMOS</option>
                            <option value="Volga">Volga</option>
                            <option value="Volvo">Volvo</option>
                            <option value="Vw">Vw</option>
                        </optgroup>

                        <optgroup label="W">
                            <option value="Warszawa">Warszawa</option>
                            <option value="Wartburg">Wartburg</option>
                            <option value="Wiesmann">Wiesmann</option>
                        </optgroup>

                        <optgroup label="X">
                            <option value="Xinshun">Xinshun</option>
                        </optgroup>

                        <optgroup label="Z">
                            <option value="Zastava">Zastava</option>
                            <option value="Zaz">Zaz</option>
                        </optgroup>

                        <optgroup label="Д">
                            <option value="Други">Други</option>
                        </optgroup>

                        <optgroup label="П">
                            <option value="Победа">Победа</option>
                        </optgroup>

                        <optgroup label="С">
                            <option value="София">София</option>
                        </optgroup>

                        <optgroup label="Ч">
                            <option value="Чайка">Чайка</option>
                        </optgroup>
                    </select>
                    <select class="list-group-item" name="Model" id="model" disabled>
                        <option>Модел</option>
                        </optgroup>
                    </select>
                    <select class="list-group-item" name="Price" id="price">
                        <option>Цена от</option>
                    </select>
                    <select class="list-group-item" name="Year" id="year">
                        <option>Година от</option>
                    </select>
                    <select class="list-group-item" name="Fuel" id="fuel">
                        <option>Двигател</option>
                    </select>
                    <select class="list-group-item" name="Gears" id="gears">
                        <option>Скоростна кутия</option>
                    </select>
                </div>
                <br>
                <div class="list-group button-list">
                    <input type="button" class="list-group-item btn-primary" value="Търсене" name="Search" id="search">
                    <a href="/findcar" class="list-group-item btn-secondary" name="Advenced-Search" id="advanced-search">Подробно търсене</a>
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
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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

    {{--<div class="sc-content-container col-md-4 col-sm-12>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-1">--}}
    {{--<select class="form-control" name="Make" id="make">--}}
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
    {{--<select class="form-control" disabled>--}}
    {{--<option>Модел</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2 col-sm-offset-2">--}}
    {{--Тук ще има Bootstrap Carousel с реклами на автомобили.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-1">--}}
    {{--<select class="form-control">--}}
    {{--<option>Година на производство</option>--}}
    {{--<option value="1990">1990</option>--}}
    {{--<option value="1991">1991</option>--}}
    {{--<option value="1992">1992</option>--}}
    {{--<option value="1993">1993</option>--}}
    {{--<option value="1994">1994</option>--}}
    {{--<option value="1995">1995</option>--}}
    {{--<option value="1996">1996</option>--}}
    {{--<option value="1997">1997</option>--}}
    {{--<option value="1998">1998</option>--}}
    {{--<option value="1999">1999</option>--}}
    {{--<option value="2000">2000</option>--}}
    {{--<option value="2001">2001</option>--}}
    {{--<option value="2002">2002</option>--}}
    {{--<option value="2003">2003</option>--}}
    {{--<option value="2004">2004</option>--}}
    {{--<option value="2005">2005</option>--}}
    {{--<option value="2006">2006</option>--}}
    {{--<option value="2007">2007</option>--}}
    {{--<option value="2008">2008</option>--}}
    {{--<option value="2009">2009</option>--}}
    {{--<option value="2010">2010</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2">--}}
    {{--<select class="form-control">--}}
    {{--<option>Цена</option>--}}
    {{--<option value="500">до 500 лв</option>--}}
    {{--<option value="1000">до 1000 лв</option>--}}
    {{--<option value="1500">до 1500 лв</option>--}}
    {{--<option value="2000">до 2000 лв</option>--}}
    {{--<option value="2500">до 2500 лв</option>--}}
    {{--<option value="3000">до 3000 лв</option>--}}
    {{--<option value="3500">до 3500 лв</option>--}}
    {{--<option value="4000">до 4000 лв</option>--}}
    {{--<option value="4500">до 4500 лв</option>--}}
    {{--<option value="5000">до 5000 лв</option>--}}
    {{--<option value="6000">до 6000 лв</option>--}}
    {{--<option value="7000">до 7000 лв</option>--}}
    {{--<option value="8000">до 8000 лв</option>--}}
    {{--<option value="9000">до 9000 лв</option>--}}
    {{--<option value="10000">до 10000 лв</option>--}}
    {{--<option value="">над 10000 лв</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-1">--}}
    {{--<select class="form-control">--}}
    {{--<option>Тип гориво</option>--}}
    {{--<option value="Gasoline">Бензин</option>--}}
    {{--<option value="Diesel">Дизел</option>--}}
    {{--<option value="Hybrid">Хибрид</option>--}}
    {{--<option value="Other">Друго</option>--}}
    {{--</optgroup>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2">--}}
    {{--<input type="text" class="form-control" placeholder="К.С. от">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<div class="col col-lg-2 inputGroupContainer">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" class="form-control" name="price" placeholder="Мощност" id="price"/>--}}
    {{--<span class="input-group-addon">к.с.</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-1 text-center">--}}
    {{--<label class="radio-inline">--}}
    {{--<input type="radio" name="condition" value="New"> Нов--}}
    {{--</label>--}}
    {{--<label class="radio-inline">--}}
    {{--<input type="radio" name="condition" value="Used" checked> Употребяван--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--<div class="col col-lg-2">--}}
    {{--<button type="button" class="btn btn-def btn-block"><i class="fa fa-search" aria-hidden="true"></i>--}}
    {{--Търсене--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col col-lg-2 col-lg-offset-3 text-center">--}}
    {{--<a href="/findcar">Подробно търсене</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection