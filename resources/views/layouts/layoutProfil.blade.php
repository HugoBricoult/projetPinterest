@extends('/layouts.app')

@section('content')

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
                <div class="mr-3 pt-4">I m a big fan of Steve Jobs and his work ! <br> I love Apple <3</div>
            </div>
        </div>

        <!-- button -->
        @auth
            @if(Auth::user()->id != $id)
                <div class="col-2">
                    <div class="d-flex">
                        <button onclick="" class="btn btn-lg pt-1 pb-1 font-weight-bold sub-button">S abonner</button>
                    </div>
                </div>
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
<script>
    let promise = fetch()->then(rs => rs.json());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();

        $.ajax({
           type:'POST',
           url:"{{ route('ajaxRequest.post') }}",
           data:{name:name, password:password, email:email},
           success:function(data){
              alert(data.success);
           }
        });

    });
</script>
@endsection