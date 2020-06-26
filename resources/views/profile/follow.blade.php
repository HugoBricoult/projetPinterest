@extends('/layouts.layoutProfil')
@section('profile_content')
@auth
    <div class="card-columns">
        @php $i=0; @endphp
        @foreach ($posts as $objet)
        <div class="card-block @php if($i>0) echo 'mt-3'; @endphp ">
        <img class="card-img" src="{{ $objet['image_link'] }}">
        </div>
        @php $i++; @endphp
        @endforeach
@endauth
@endsection