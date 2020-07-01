@extends('/layouts.app')

@section('content')

<div class="container">

    <!-- bannière -->
    <div class="row mb-n5">
        <img src="../../{{ $user->image_cover_link }}" style="width:100%; height:200px">
    </div>

    <div class="row align-items-baseline">

        <!-- avatar -->
        <div class="col-3" style="text-align:right">
            <img src="../../{{ $user->image_profile_link }}" style='width:200px; height:200px' class='rounded-circle ml-5'>
        </div>

        <!-- pseudo -->
        <div class="col-3">
            <div class="d-flex">
                <div class="h3 mr-3 font-weight-bold">{{ $user->pseudo }}</div>
            </div>
        </div>


        <!-- button -->
        @auth
            @if(Auth::user()->id != $id)
                <div class="col-2">
                    <div class="d-flex">
                        <button class="btn btn-lg pt-1 pb-1 font-weight-bold sub-button">S abonner</button>
                    </div>
                </div>
            @endif
        @endauth

        @auth
                    @if(Auth::user()->id == $id)
                    <a href="{{ route('profile.edit',array('id'=>$id) )}}">Modifier</a>
                    @endif
        @endauth
        

    </div>

    <div class="row">

        <div class="col-1"></div>

        

            @auth
                @if(Auth::user()->id == $id)
                    <div class="col-10 pt-5 d-flex justify-content-around">
                        <!-- Posts -->
                        <div class="">
                            <div class="h5 pt-2 ml-5 font-weight-bold"><a href="/profile/{{$id}}/posts" style="text-decoration:none; color:black">Posts</a></div>
                        </div>

                        <!-- epingle -->
                        <div class="">
                            <div class="h5 pt-2" style="visibility:visible"><a href="/profile/{{$id}}/pint" style="text-decoration:none; color:black">Epingles</a></div>
                        </div>

                        <!-- abonnements -->
                        <div class="">
                            <div class="h5 pt-2 mr-5" style="visibility:visible"><a href="/profile/{{$id}}/follow" style="text-decoration:none; color:black">Abonnements</a></div>
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
            

        

        <div class="col-1"></div>
        
    </div>

    <div class="row mt-n3">

        <div class="col-2">
        </div>
        
        <div class="col-8"><hr style="height:2px; background-color:#F7DD94">
        </div>

        <div class="col-2">
        </div>

    </div>

    @yield('profile_content')


</div>
@endsection