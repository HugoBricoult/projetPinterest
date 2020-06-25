@extends('/layouts.app')

@section('content')
@php 
        $routename = Route::currentRouteName();
        if ($routename=='show.posts') {
            $displayposts='';
            $displaypints='style="display:none"';
            $displayabonnements='style="display:none"';} 
        else if ($routename=='show.pints'){
            $displayposts='style="display:none"';
            $displaypints='';
            $displayabonnements='style="display:none"';}
        else {
            $displayposts='style="display:none"';
            $displaypints='style="display:none"';
            $displayabonnements='';}
        $routeposts="./posts";
        $routepints="./pints";
        $routeabonnements='./abonnements';
        
@endphp

@if (Auth::guest())
@php 
        $routename = Route::currentRouteName();
        if ($routename=='show.posts') {
            $displayposts='';
            $displaypints='style="display:none"';
            $displayabonnements='style="display:none"';} 
        else if ($routename=='show.pints'){
            $displayposts='style="display:none"';
            $displaypints='style="display:none"';
            $displayabonnements='style="display:none"';}
        else {
            $displayposts='style="display:none"';
            $displaypints='style="display:none"';
            $displayabonnements='style="display:none"';}
        $routeposts="./posts";
        $routepints="/../../login";
        $routeabonnements='/../../login';
        
@endphp
@endif

<div class="container">

    <!-- bannière -->
    <div class="row mb-n5">
        <img src="https://wallup.net/wp-content/uploads/2015/12/268475-nature-landscape-forest-mist-puddle-frost-blue-shadow-morning-trees-dark-pine_trees.jpg" style="width:100%; height:200px">
    </div>

    <div class="row align-items-baseline">

        <!-- avatar -->
        <div class="col-3" style="text-align:right">
            <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t31.0-1/p320x320/27709777_590150484666821_2107143794062119924_o.png?_nc_cat=110&_nc_sid=dbb9e7&_nc_ohc=zvj1iAMQtREAX8sv1LN&_nc_ht=scontent-bru2-1.xx&oh=afbf67d12d6c619f907386fabb1c2af7&oe=5F161A4D" style='width:200px' class='rounded-circle ml-5'>
        </div>

        <!-- pseudo -->
        <div class="col-3">
            <div class="d-flex">
                <div class="h3 mr-3 font-weight-bold">{{ $user->pseudo }}</div>
            </div>
        </div>

        <!-- description -->
        <div class="col-4">
            <div class="d-flex">
                <div class="mr-3 pt-4">I'm a big fan of Steve Jobs and his work ! <br> I love Apple <3</div>
            </div>
        </div>

        <!-- button -->
        <div class="col-2">
            <div class="d-flex">
                <button class="btn btn-lg pt-1 pb-1 font-weight-bold" style="background-color:#ffb443" >S'abonner</button>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-1"></div>

        <div class="col-10 pt-5 d-flex justify-content-around">

            <!-- Posts -->
            <div class="">
                <div class="h5 pt-2 ml-5 font-weight-bold"><a href=" @php echo $routeposts; @endphp " style="text-decoration:none; color:black">Posts</a></div>
            </div>

            <!-- epingle -->
            <div class="">
                <div class="h5 pt-2" style="visibility:visible"><a href=" @php echo $routepints; @endphp " style="text-decoration:none; color:black">Epingles</a></div>
            </div>

            <!-- abonnements -->
            <div class="">
                <div class="h5 pt-2 mr-5" style="visibility:visible"><a href=" @php echo $routeabonnements; @endphp " style="text-decoration:none; color:black">Abonnements</a></div>
            </div>

        </div>

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

    <!-- Posts -->

    <div class="card-columns" @php echo $displayposts; @endphp>
        @php $i=0; @endphp
        @foreach ($post as $objet)
        <div class="card-block @php if($i>0) echo 'mt-3'; @endphp ">
        <img class="card-img" src="{{ $objet['image_link'] }}">
        </div>
        @php $i++; @endphp
        @endforeach
    </div>

    <!-- Pinted -->
    
    <div class="card-columns"@php echo $displaypints; @endphp>
        @php $i=0; @endphp
        @foreach ($pint as $objet)
        <div class="card-block @php if($i>0) echo 'mt-3'; @endphp ">
        <img class="card-img" src="{{ $objet['image_link'] }}">
        </div>
        @php $i++; @endphp
        @endforeach
    </div>

</div>
@endsection
