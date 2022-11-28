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
            style="padding: 15px; border-radius:5px">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Heading</a></li>
                <li class="breadcrumb-item"><a href="#">Education</a></li>
                <li class="breadcrumb-item"><a href="#">Experience</a></li>
                <li class="breadcrumb-item"><a href="#">Skills</a></li>
                <li class="breadcrumb-item"><a href="#">Liste User</a></li>
            </ol>
        </nav>

        <h2>Skill Detaills</h2>

        <div>
            @if (session()->has('errors'))

                @foreach ($errors->all() as $e)
                    <div class="alert alert-danger" role="role">
                        <p>{{ $e }}</p>

                    </div>
                @endforeach

            @endif
        </div>
        <form action="/skill" method='POST' style="width:500px; margin:auto">
            @csrf
            <div class="form-group">
                <label for="name">Skill Name:</label>
                <input type="text" id="name" name="name" placeholder="name" class="form-control"
                    style="margin-bottom: 20px">
            </div>
            <div class="form-group">
                <label for="rating">Niveau:</label>
                <input type="text" name="rating" placeholder="rating" class="form-control">
            </div>
            <div style="margin-top: 7px; margin-left:230px">
                <input type="submit" valeur="submit" class="btn btn-info btn-lg">
                <a name="" id="" class="btn btn-warning btn-lg" href="{{ url('/user-liste') }}"
                    role="button">Liste User</a>

            </div>
        </form>
    </div>
</body>

</html>
