@extends('layouts.app')
@section('content')

<div class="wf-container">

@foreach($post as $data)

    <a href="/post/{{$data['id']}}" class="wf-box wf-card" style="text-decoration: none !important;">
        <h3>{{$data['title']}}</h3>
        <img src="{{asset($data['image_link'])}}" alt="{{$data['description']}}">
    </a>

@endforeach


</div>

@endsection
