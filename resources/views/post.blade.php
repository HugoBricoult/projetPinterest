@extends('layouts.app')

@section('content')
<div class="postview">

<h2>{{$post['title']}}</h2>

<h6>By : {{$post['author_name']}}</h4>

<img src="{{ $post['image_link'] }}" alt="image du post selectionné">

<p> {{$post['description']}} </p>


</div>


@endsection
