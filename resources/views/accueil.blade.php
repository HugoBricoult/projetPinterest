@extends('layouts.app')
@section('content')
    
<div class="wrapper">
    @foreach($post as $data)
    
        <article class="cardwrap">
            <h3>{{$data['title']}}</h3>
            <img src="{{asset($data['image_link'])}}" alt="{{$data['description']}}">
                <p>{{$data['description']}}</p>
        </article>
    
    @endforeach
</div>

@endsection


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
<body>

<div class="wf-container">

@foreach($post as $data)
    <article class="wf-box card">
        <h3>{{$data['title']}}</h3>
        <img src="{{$data['image_link']}}" alt="{{$data['description']}}">
    </article>
@endforeach

</div>

</body>
<script src="{{URL::asset('/js/waterfall.js')}}"></script>
</html>
