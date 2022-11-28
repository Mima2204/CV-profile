<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>create experience</title>
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
        <h2 style="margin-bottom: 40px">Experience Detaills</h2>

        <div>
            @if (session()->has('errors'))

                @foreach ($errors->all() as $e)
                    <div class="alert alert-danger" role="role">
                        <p>{{ $e }}</p>

                    </div>
                @endforeach

            @endif
        </div>
        <form action="/experience" method='POST' style="width:500px; margin:auto">
            @csrf

            <div class="form-group">
                <label for="job_title">Title Job:</label>
                <input type="text" id="job_title" name="job_title" placeholder="job_title" class="form-control">
            </div>

            <div class="form-group">
                <label for="company">Name Company:</label>
                <input type="text" id="company" name="company" placeholder="company" class="form-control">
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="start_date">Date Start:</label>
                        <input type="date" id="start_date" name="start_date" placeholder="start_date"
                            class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="eind_date">Date Eind:</label>
                        <input type="date" id="eind_date" name="eind_date" placeholder="eind_date"
                            class="form-control">
                    </div>
                </div>
            </div>

            <div style="margin-top: 7px; margin-left:295px">
                <input type="submit" valeur="Save" class="btn btn-info btn-lg">
                <a name="" id="" class="btn btn-warning btn-lg" href="{{ route('skill.create') }}"
                    role="button">Skill</a>
            </div>
        </form>
    </div>
</body>

</html>
