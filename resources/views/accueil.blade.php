<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinkerton</title>
    <link rel="stylesheet" href="{{URL::asset('/css/grid.css')}}">
</head>
<body class="wrapper">

@foreach($post as $data)

    <article class="cardwrap">
        <h3>{{$data['title']}}</h3>
        <img src="{{$data['image_link']}}" alt="{{$data['description']}}">
            <p>{{$data['description']}}</p>
    </article>

@endforeach

</body>
</html>
