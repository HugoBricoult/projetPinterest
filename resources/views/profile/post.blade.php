@extends('/layouts.layoutProfil')
@section('profile_content')
    <div class="card-columns" >
        @php $i=0; @endphp
        @foreach ($post as $objet)
        <div class="card-block @php if($i>0) echo 'mt-3'; @endphp ">
        <img class="card-img" src="{{ $objet['image_link'] }}">
        </div>
        @php $i++; @endphp
        @endforeach
    </div>
@endsection

