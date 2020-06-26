@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex flex-nowrap justify-content-center">

        <img class="col-md-4 m-0 p-0 rounded-left" src="{{ asset($post['image_link']) }}" alt="image du post selectionné">

            <div class="d-flex flex-wrap flex-column col-md-6 border border-grey rounded-right text-dark">
                <h2>{{$post['title']}}</h2>
                <p> {{$post['description']}} </p>
                <a href="" class="btn btn-secondary">By:{{$post['author_name']}}</a>
            </div>

    </div>
</div>


@endsection
