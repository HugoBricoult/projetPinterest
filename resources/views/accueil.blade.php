@extends('layouts.app')
@section('content')

<div class="wf-container">

@foreach($post as $data)
    <article class="wf-box wf-card">
        <h3>{{$data['title']}}</h3>
        <img src="{{asset($data['image_link'])}}" alt="{{$data['description']}}">
    </article>
@endforeach

</div>

@endsection
