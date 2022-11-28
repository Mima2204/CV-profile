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
                <li class="breadcrumb-item active" aria-current="page">Liste User</li>
            </ol>
        </nav>

        <h2 style="margin-bottom: 40px">Tell Us Something About You</h2>

        <div>
            @if (session()->has('errors'))

                @foreach ($errors->all() as $e)
                    <div class="alert alert-danger" role="role">
                        <p>{{ $e }}</p>

                    </div>
                @endforeach

            @endif
        </div>
        <form action="/user-detail" method='POST' style="width:500px; margin:auto">
            @csrf
            <div class="form-group">
                <label for="fullname">Name User:</label>
                <input type="text" id="fullname" name="fullname" placeholder="fullname" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" placeholder="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="adress">Adress:</label>
                <input type="text" id="adress" name="adress" placeholder="adress" class="form-control">
            </div>
            <div class="form-group">
                <label for="linkdin">LinkedIn:</label>
                <input type="text" id="linkdin" name="linkdin" placeholder="LinkedIn"class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea type="text" id="description" name="description" placeholder="description" class="form-control"></textarea>
            </div>


            <div style="margin-top: 7px; margin-left:245px">
                <input type="submit" valeur="submit" class="btn btn-info btn-lg">
                <a namr="" id="" class="btn btn-warning btn-lg" href="{{ route('education.create') }}"
                    role="button">Education</a>
            </div>
        </form>
    </div>
</body>

</html>
