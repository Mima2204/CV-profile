<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summary education</title>
</head>

<body>
    <h2> Education Summary</h2>
    @foreach ($education as $e)
        <p>
        <h4>{{ $e->school_name }}</h4>
        </p>

    @endforeach

    @endforeach



    </div>
</body>

</html>
