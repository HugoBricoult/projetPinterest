<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinkerton</title>
    <link rel="stylesheet" href="{{URL::asset('/css/marcofall.css')}}">
</head>
<body class="row">

<div class="d-flex flex-wrap col-md-12">

@foreach($post as $data)
    <article class="card col-md-3">
        <h3>{{$data['title']}}</h3>
        <img src="{{$data['image_link']}}" alt="{{$data['description']}}">
    </article>
@endforeach
</div>

</body>
</html>
