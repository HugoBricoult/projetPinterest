@extends('layouts.app')
@section('content')
    
<div class="wrapper">
    @foreach($post as $data)
    
        <article class="cardwrap">
            <h3>{{$data['title']}}</h3>
            <img src="{{asset('storage/uploads/dza.png')}}" alt="{{$data['description']}}">
                <p>{{$data['description']}}</p>
        </article>
    
    @endforeach
</div>

@endsection


