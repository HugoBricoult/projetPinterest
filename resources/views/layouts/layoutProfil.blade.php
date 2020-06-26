@extends('/layouts.app')

@section('content')

<div class="container">

    <!-- bannière -->
    <div class="row mb-n5">
        <img src="https://wallup.net/wp-content/uploads/2015/12/268475-nature-landscape-forest-mist-puddle-frost-blue-shadow-morning-trees-dark-pine_trees.jpg" style="width:100%; height:200px">
    </div>

    <div class="row align-items-baseline">

        <!-- avatar -->
        <div class="col-3">
            <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t31.0-1/p320x320/27709777_590150484666821_2107143794062119924_o.png?_nc_cat=110&_nc_sid=dbb9e7&_nc_ohc=zvj1iAMQtREAX8sv1LN&_nc_ht=scontent-bru2-1.xx&oh=afbf67d12d6c619f907386fabb1c2af7&oe=5F161A4D" style='width:200px' class='rounded-circle ml-5'>
        </div>

        <!-- pseudo -->
        <div class="col-3">
            <div class="d-flex">
                <div class="h3 mr-3 font-weight-bold text-dark">{{ $user->pseudo }}</div>
            </div>
        </div>

        <!-- description -->
        <div class="col-4">
            <div class="d-flex">
                <div class="mr-3 pt-4 text-dark">I m a big fan of Steve Jobs and his work ! <br> I love Apple <3</div>
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


    </div>

    <div class="row">

        <div class="col-1"></div>



            @yield('navprofil')




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
