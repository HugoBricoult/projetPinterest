@extends('layouts.app')
@section('content')

<div class="wrapper">
    @foreach($post as $data)

        <article class="cardwrap">
            <h3>{{$data['title']}}</h3>
            <img src="{{$data['image_link']}}" alt="{{$data['description']}}">
                <p>{{$data['description']}}</p>
        </article>

    @endforeach
</div>

@endsection


