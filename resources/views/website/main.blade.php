@extends('layouts.web-layout')

@section('style')
<style>
body {
    overflow-x: hidden;
}

.carousel-caption {
    top: 15%;
    left: 5%;
    text-align: left;
    max-width: 450px;
    right: auto;
    padding: 5px
}

.sidenav {
    height: 100%;
    background: #0398fc;
    color: white;
}

.sidenav .side-item {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    height: 80px;
    padding: 15px 20px;
}

.sidenav .side-item i {
    margin: auto 25px;
}

.sidenav .side-item a {
    font-size: 16px;
    line-height: 1.5;
    text-decoration: none;
    color: white;
}

.sidenav .side-item:hover {
    background: #2a4c87;
    color: white;
    border-left: 6px solid white;

}

#border:after {
    content: '';
    border-bottom: 3px solid #292796;
    width: 30px;
    display: block;
}

#RSidenav a {
    position: absolute;
    top: 0;
    right: 0;
    display: block;
    margin-top: 60px;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}

.rotate {
    -webkit-transform: rotate(90deg);
}

#links {
    background-color: #f2df07;
    color: white;
}

#news {
    background-color: #0559eb;
    color: white;
}
</style>
@endsection

@section('body')
<!-- Top Header -->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MUFAP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 me-2 mb-lg-0">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            MUFAP <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">INVESTORS</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">INDUSTRY</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">COMPLAINT</a>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            DOWNLOADS <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-primary" type="submit">SIGN IN</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- Below Header Section -->
<section>
    <!-- Carousel -->
    <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"
                style="background: url('https://cdn2.thecatapi.com/images/yCd1pVi7Y.jpg') center no-repeat; width:100%; height:500px;"
                data-bs-interval="10000">
                <div class="carousel-caption d-md-block">
                    <h5 class="text-primary">WELCOME TO</h5>
                    <h1 style="font-size: 75px;"><b>MUFAP</b></h1>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-primary mt-4">LEARN MORE</button>
                </div>
            </div>
            <div class="carousel-item"
                style="background: url('https://cdn2.thecatapi.com/images/yCd1pVi7Y.jpg') center no-repeat; width:100%; height:500px;"
                data-bs-interval="2000">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-primary">WELCOME TO</h5>
                    <h1 style="font-size: 75px;"><b>MUFAP</b></h1>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-primary mt-4">LEARN MORE</button>
                </div>
            </div>
            <div class="carousel-item"
                style="background: url('https://cdn2.thecatapi.com/images/yCd1pVi7Y.jpg') center no-repeat; width:100%; height:500px;"
                data-bs-interval="20000">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-primary">WELCOME TO</h5>
                    <h1 style="font-size: 75px;"><b>MUFAP</b></h1>
                    <p>Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-primary mt-4">LEARN MORE</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Section -->
<section>
    <div class="row">
        <div class="col-12 col-md-3">
            <!-- Side nav -->
            <div class="sidenav">
                <div class="side-item">
                    <i class="fa fa-hand-lizard-o fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#about">FUND PRICES</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-id-card-o fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#services">RETURNS</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-university fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#clients">MUTUAL FUNDS</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-hourglass fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#contact">VOLUNTARY PENSION</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#contact">EXCHANGE TRADE FUND</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-flag fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#contact">SHARIAH COMPLIANT</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-caret-square-o-up fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#contact">INVESTOR CENTER</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#contact">EVENTS</a></div>
                </div>
                <div class="side-item">
                    <i class="fa fa-exchange fa-2x" aria-hidden="true"></i>
                    <div class="py-3"><a href="#contact">LODGE A COMPLAINT</a></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-9" style="position: relative;">

            <!-- Quick Links -->
            <div id="RSidenav">
                <div><a href="#" id="links" class="text-decoration-none rotate"
                        style="margin-right: -27px; padding: 0px 10px; padding-top: 10px;">Quick Links</a></div>
                <div><a href="#" id="news" class="text-decoration-none rotate"
                        style="margin-right: -34px; margin-top: 180px; padding: 0px 15px; padding-top: 10px;">News
                        Letter</a></div>
            </div>

            <!-- Main Section -->
            <div class="container" style="padding-right: 50px;">

                <div style="text-align: center;">
                    <h3 style="width:18%; margin: 10px auto; padding-bottom: 10px; border-bottom: 2px solid gray;">About
                        Mufap</h3>
                    <p style="text-align: center;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis error maiores quod culpa dolor
                        minima officiis,quasi maxime nostrum doloribus. Facilis error maiores quod culpa dolor minima
                        officiis,
                        quasi maxime nostrum doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        error maiores quod culpa dolor minima officiis,
                        quasi maxime nostrum doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        error maiores quod culpa dolor minima officiis.
                    </p>
                </div>

                <div class="card"
                    style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border: none; margin-bottom: 20px;">
                    <h5 class="card-header" id="border" style="background-color: white!important; border:none;">Industry
                        Growth
                    </h5>
                    <div class="card-body">
                        <div class="d-flex flex-wrap flex-grow-1">
                            @for ($i = 0; $i
                            < 15; $i++) <button class="btn btn-light rounded-pill mx-2 my-2" style="width: 18%;">
                                Industry</button>
                                @endfor
                        </div>
                    </div>

                    <h5 class="card-header" id="border" style="background-color: white!important; border:none;">
                        Performance Summary
                    </h5>

                    <div class="card-body">
                        <table class="table table-sm">
                            <thead style="background-color: #2a4c87; color: white;">
                                <tr>
                                    <th scope="col">FIND NAME</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">YTD</th>
                                    <th scope="col">MTD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                </tr>
                                <tr>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                </tr>
                                <tr>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                    <td>HBL ISALMIC EQUALITY FUND</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Navigation -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer style="text-align: center; padding: 18px; background-color: #2a4c87;color: white;">
    &copy; Copyright 2020 MUFAP All Rights Reserved
</footer>
@endsection