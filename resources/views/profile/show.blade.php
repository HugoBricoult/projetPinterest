@extends('/layouts.app')

@section('content')
@if(isset($user))
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
        <!-- partages -->
            <div class="">
                <div class="h5 pt-2 ml-5 font-weight-bold"><a href="" style="text-decoration:none; color:black">Partages</a></div>
            </div>
        <!-- epingle -->
            <div class="">
                <div class="h5 pt-2" style="visibility:visible"><a href="" style="text-decoration:none; color:black">Epingles</a></div>
            </div>
        <!-- abonnements -->
            <div class="">
                <div class="h5 pt-2 mr-5" style="visibility:visible"><a href="" style="text-decoration:none; color:black">Abonnements</a></div>
            </div>
        </div>

        <div class="col-1"></div>
    </div>
    <div class="row mt-n3">
        <div class="col-2"></div>
        <div class="col-8"><hr style="height:2px; background-color:#F7DD94"></div>
        <div class="col-2"></div>
    </div>
    <!-- Partages -->
    <div class="card-columns">
    
    <div class="card-block">
        <img class="card-img" src="https://i.pinimg.com/236x/b0/24/ed/b024ed9fcbe7e8188f85c4132b8b407e.jpg" alt="Card image cap">
    </div>

    <div class="card-block mt-4">
        <img class="card-img-top" src="https://i.pinimg.com/236x/1f/d5/a1/1fd5a1c9821110e75fa8cdce689d1c79.jpg" alt="Card image cap">
    </div>

    <div class="card-block mt-4">
        <img class="card-img" src="https://i.pinimg.com/236x/98/89/a0/9889a0083f6a61d4c5cd7f1c715cda10.jpg" alt="Card image">
    </div>

    <div class="card-block mt-4">
        <img class="card-img-top" src="https://i.pinimg.com/236x/56/bc/32/56bc32efdf75be3469fc5fcc34d09527.jpg" alt="Card image cap">
    </div>

    <div class="card-block mt-4">
        <img class="card-img-top" src="https://i.pinimg.com/236x/52/80/f7/5280f730e2628372af2b0c16bd67960b.jpg" alt="Card image cap">
    </div>

    <div class="card-block mt-4">
        <img class="card-img-top" src="https://i.pinimg.com/236x/cd/e9/19/cde919f7a1d17adf2a7ed3eccc5ae49d.jpg" alt="Card image cap">
    </div>

    <div class="card-block mt-4">
        <img class="card-img" src="https://i.pinimg.com/236x/a4/a0/f3/a4a0f303daa85f292c30f3eca5d3e9bc.jpg" alt="Card image">
    </div>

    <div class="card-block mt-4">
        <img class="card-img-top" src="https://i.pinimg.com/236x/fd/7c/2a/fd7c2aa0315b95cdacd6232141c76056.jpg" alt="Card image cap">
    </div>
    
    <div class="card-block mt-4">
        <img class="card-img-top" src="https://i.pinimg.com/236x/58/03/5f/58035ffa6bb7a900ec9cce4cb4a5ca70.jpg" alt="Card image cap">
    </div>
</div>

    <!-- Pinted -->
    <div class="card-columns">
    
        <div class="card-block">
            <img class="card-img" src="https://i.pinimg.com/236x/b0/24/ed/b024ed9fcbe7e8188f85c4132b8b407e.jpg" alt="Card image cap">
        </div>

        <div class="card-block mt-4">
            <img class="card-img-top" src="https://i.pinimg.com/236x/1f/d5/a1/1fd5a1c9821110e75fa8cdce689d1c79.jpg" alt="Card image cap">
        </div>

        <div class="card-block mt-4">
            <img class="card-img" src="https://i.pinimg.com/236x/98/89/a0/9889a0083f6a61d4c5cd7f1c715cda10.jpg" alt="Card image">
        </div>

        <div class="card-block mt-4">
            <img class="card-img-top" src="https://i.pinimg.com/236x/56/bc/32/56bc32efdf75be3469fc5fcc34d09527.jpg" alt="Card image cap">
        </div>

        <div class="card-block mt-4">
            <img class="card-img-top" src="https://i.pinimg.com/236x/52/80/f7/5280f730e2628372af2b0c16bd67960b.jpg" alt="Card image cap">
        </div>

        <div class="card-block mt-4">
            <img class="card-img-top" src="https://i.pinimg.com/236x/cd/e9/19/cde919f7a1d17adf2a7ed3eccc5ae49d.jpg" alt="Card image cap">
        </div>

        <div class="card-block mt-4">
            <img class="card-img" src="https://i.pinimg.com/236x/a4/a0/f3/a4a0f303daa85f292c30f3eca5d3e9bc.jpg" alt="Card image">
        </div>

        <div class="card-block mt-4">
            <img class="card-img-top" src="https://i.pinimg.com/236x/fd/7c/2a/fd7c2aa0315b95cdacd6232141c76056.jpg" alt="Card image cap">
        </div>
        
        <div class="card-block mt-4">
            <img class="card-img-top" src="https://i.pinimg.com/236x/58/03/5f/58035ffa6bb7a900ec9cce4cb4a5ca70.jpg" alt="Card image cap">
        </div>
    </div>
</div>
@endif
@endsection
