<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>menu</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>
    <h2>WElcome To CV Builder</h2>
    <div class="navbar navbar-expand-sm navbar-light bg-light">

        <div class="container-nav">
            <div class="navbar-item">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('user-detail.create') }}" class="btn btn-primary"> {{ Auth::user()->name }}
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="btn btn-primary ">Registre</a>
                        <a href="{{ route('login') }}" class="btn btn-success ">Login</a>
                    @endauth
                @endif

                <a namr="" id="" class="btn btn-warning nav-left"
                    href="{{ route('user-detail.create') }}" role="button">Build Now</a>
                <a namr="" id="" class="btn btn-warning" href="{{ route('dashboard') }}"
                    role="button">back</a>

            </div>

        </div>
        <div class="blend">
            <span>Builder Profile</span>
        </div>
    </div>




    <script src="main.js"></script>
</body>

</html>
