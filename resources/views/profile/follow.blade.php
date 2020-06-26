@extends('/layouts.layoutProfil')
@section('navprofil')
@auth
                @if(Auth::user()->id == $id)
                    <div class="col-10 pt-5 d-flex justify-content-around">
                        <!-- Posts -->
                        <div class="">
                            <div class="h5 pt-2 ml-5"><a href="/profile/{{$id}}/posts" style="text-decoration:none; color:black">Posts</a></div>
                        </div>

                        <!-- epingle -->
                        <div class="">
                            <div class="h5 pt-2" style="visibility:visible"><a href="/profile/{{$id}}/pint" style="text-decoration:none; color:black">Epingles</a></div>
                        </div>

                        <!-- abonnements -->
                        <div class="">
                            <div class="h5 pt-2 mr-5 font-weight-bold" style="visibility:visible"><a href="/profile/{{$id}}/follow" style="text-decoration:none; color:black">Abonnements</a></div>
                        </div>
                    </div>
                @else
                    <!-- Posts -->
                    <div class="col-10 pt-5 d-flex ml-5">
                        <div class="">
                            <div class="h5 pt-2 ml-5 font-weight-bold"><a href="/profile/{{$id}}/posts" style="text-decoration:none; color:black">Posts</a></div>
                        </div>
                    </div>
                @endif
@endauth
@endsection
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
