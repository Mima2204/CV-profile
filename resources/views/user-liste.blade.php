<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Liste personne</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <a href="{{ url('/dashboard') }}" class="btn btn-danger"
        style="margin-left:7px; width:85px; margin-top:7px; cursor:pointer; padding: 8px; border-radius: 10px;">Back</a>
    <a href="{{ url('/resume') }}" class="btn btn-primary"
        style="margin-left:1500px; width:120px; margin-top:15px; cursor:pointer; padding: 8px; border-radius: 10px;">vieuw
        naar cv</a>
    {{-- <a href="{{ url('/') }}" class="btn btn-primary"
        style="margin-left:1500px; width:120px; margin-top:15px; cursor:pointer; padding: 8px; border-radius: 10px;">vieuw
        naar cv</a>
    <a href="{{ url('/') }}" class="btn btn-primary"
        style="margin-left:1500px; width:120px; margin-top:15px; cursor:pointer; padding: 8px; border-radius: 10px;">vieuw
        naar cv</a> --}}


    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Personne Liste</h2>

                <div></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>birth date</th>
                            <th>Email</th>
                            <th>Adress</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--====================== php voor incrementation i=================================  -->
                        @php
                            $i = 1;
                        @endphp
                        <!--===================================================================================  -->

                        @foreach ($data as $pers)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $pers->fullname }}</td>
                                <td>{{ $pers->phone }}</td>
                                <td>{{ $pers->adress }}</td>
                                <td>{{ $pers->linkdin }}</td>
                                <td>{{ $pers->email }}</td>

                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>
