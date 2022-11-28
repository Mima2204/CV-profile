<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>create</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container" style="margin-top:20px">
        <nav aria-label="breadcrumb" class="navbar-expand-lg navbar-light bg-light"
            style="padding: 15px; border-radius:10px">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Heding</a></li>
                <li class="breadcrumb-item"><a href="#">Education</a></li>
                <li class="breadcrumb-item"><a href="#">Experience</a></li>
                <li class="breadcrumb-item"><a href="#">Skills</a></li>
                <li class="breadcrumb-item"><a href="#">Liste User</a></li>
        </nav>

        <h2 style="margin-bottom: 40px">Education Detaills</h2>

        <div>
            @if (session()->has('errors'))

                @foreach ($errors->all() as $e)
                    <div class="alert alert-danger" role="role">
                        <p>{{ $e }}</p>

                    </div>
                @endforeach

            @endif
        </div>
        <form action="/education" method='POST' style="width:500px; margin:auto">
            @csrf

            <div class="form-group">
                <label for="School_name">Name School"</label>
                <input type="text" id="School_name" name="School_name" placeholder="School_name"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="field_of_study">Study:</label>
                <input type="text" id="field_of_study" name="field_of_study" placeholder="field_of_study"
                    class="form-control">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="graduation_start_date">Date Start Of Graduation</label>
                        <input type="date" id="graduation_start_date" name="graduation_start_date"
                            placeholder="graduation_start_date" class="form-control">
                    </div>
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="graduation_eind_date">Date Eind Of Graduation</label>
                        <input type="date" name="graduation_eind_date" placeholder="graduation_eind_date"
                            class="form-control">
                    </div>
                </div>
            </div>
            <div style="margin-top: 7px; margin-left:235px">
                <input type="submit" valeur="submit" class="btn btn-info btn-lg">
                <a name="" id="" class="btn btn-warning btn-lg" href="{{ route('experience.create') }}"
                    role="button">Experience</a>
            </div>
        </form>
    </div>
</body>

</html>
