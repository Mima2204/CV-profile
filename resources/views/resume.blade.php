{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
</head>

<body>
    <h2>resume</h2>
    <section class="heading">
        <h2>{{ $user->details->fullname }}</h2>
        <p>Email :{{ $user->details->email }}</p>
        <p>Adress :{{ $user->details->adress }}</p>
        <p>LinkdIn :{{ $user->details->linkedin }}</p>


    </section>

    <section class="education">
        <h2>Education</h2>

        @foreach ($user->education as $e)
            <h4>degree</h4>
            <p>School:{{ $e->School_name }}</p>
        @endforeach
    </section>
    <section class="experience"></section>
    <section class="skill"></section>



</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>PROFILE CV</title>
</head>

<body>
    <!-- ********************************************************************************************** -->
    <!-- ========================nav barre met condition over login==================================== -->
    {{-- <nav>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="btn btn-success">{{ Auth::user()->name }}</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="btn btn-primary">Login</a></li>
                    <br>
                    <li><a href="{{ route('register') }}" class="btn btn-success">Resiteren</a></li>
                @endauth
            @endif
        </ul>
    </nav> --}}


    <!-- ******************************************************************************************* -->
    <!-- ======================# LEFT SIDE #============================ -->

    <div class="container" class="form-label">
        <div class="left_Side">
            <div class="profileText">
                <div class="image">
                    <img src="foto.jpg ">
                </div>
            </div>
            <section class="heading">


                <div class="contactInfo">
                    <h3 class="title">Personalia</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span class="text"></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <span class="text"></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span class="text"></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <span class="text"></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                            <span class="text"></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                            <span class="text"></span>
                        </li>
                    </ul>
                </div>
            </section>
            <div class="contactInfo taal">
                <h3 class="title">Taal</h3>
                <ul>
                    <li><span class="text">NL</span>
                        <div class="percent">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li><span class="text">EN </span>
                        <div class="percent">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot2"></span>
                        </div>
                    </li>
                </ul>

                <ul>
                    <li><span class="text">FR</span>
                        <div class="percent">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot2"></span>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li><span class="text">DE</span>
                        <div class="percent">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot2"></span>
                            <span class="dot2"></span>
                            <span class="dot2"></span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="contactInfo vaardigheid">
                <h3 class="title">vaardigheid</h3>
                <ul>
                    <li><span class="text">MS Office</span>
                        <div class="percent1">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li><span class="text">Excel </span>
                        <div class="percent2">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot2"></span>
                        </div>

                    </li>
                </ul>
                <ul>
                    <li><span class="text">SPSS </span>
                        <div class="percent2">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot2"></span>
                            <span class="dot2"></span>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li> <span class="text">Photoshop</span>
                        <div class="percent3">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot2"></span>
                            <span class="dot2"></span>
                            <span class="dot2"></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contactInfo hobby">
                <h3 class="title">Hobby's</h3>
                <li>Koken</li>
                <li>Reizen</li>
                <li>Sporten
            </div>
        </div>

        <!--**************************************************************************************************-->
        <!-- =======================================RIGHT SIDE=============================================== -->

        <div class="right_Side">
            <div class="about">
                <h2></h2>
                <h3></h3>
                <h2 class="title2">Profile</h2>
                <p></p>
            </div>
            <div class="about">
                <h2 class="title2">Experience</h2>
                <div class="box">
                    <div class="year_compar">
                        <h5>2019</h5>
                        <h5>company naam</h5>
                    </div>
                    <div class="text">
                        <h4>senior</h4>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                    </div>
                </div>
                <div class="box">
                    <div class="year_compar">
                        <h5>2020-2002</h5>
                        <h5>company naam</h5>
                    </div>
                    <div class="text">
                        <h4>senior</h4>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                    </div>
                </div>
                <div class="box">
                    <div class="year_compar">
                        <h5>2020-2002</h5>
                        <h5>company naam</h5>
                    </div>
                    <div class="text">
                        <h4>senior</h4>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                    </div>
                </div>
                <div class="box">
                    <div class="year_compar">
                        <h5>2020-2002</h5>
                        <h5>company naam</h5>
                    </div>
                    <div class="text">
                        <h4>senior</h4>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, debitis.</li>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
