@extends('/layouts.app')

@section('content')


<div class="container">

    <!-- bannière -->
    <div class="row mb-n5">
        @if ($user->image_cover_link != null & $user->image_cover_link != "")

            <div class="cover_profile">
                <img src="{{asset($user->image_cover_link)}}" alt="image de couverture">
            </div>
        @else
            <img src="https://wallup.net/wp-content/uploads/2015/12/268475-nature-landscape-forest-mist-puddle-frost-blue-shadow-morning-trees-dark-pine_trees.jpg" style="width:100%; height:200px">
        @endif
        @auth
                    @if(Auth::user()->id == $id)
                        <a class="edit-cover" data-toggle="modal" data-target="#exampleModalcover" href="#"><i class="fa fa-edit"></i></a>
                        <div class="modal fade" id="exampleModalcover" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Image de Couverture</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <form action="/update/profile/cover" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                        <input type="file" name="file" id="file">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                                    </div>
                                </form>

                              </div>
                            </div>
                          </div>
                    @endif
        @endauth
    </div>

    <div class="row align-items-baseline">

        <!-- avatar -->
        <div class="col-3">
            @if ($user->image_profile_link != null & $user->image_profile_link != "")
                <img src="{{asset($user->image_profile_link)}}" alt="image de couverture" style='width:200px' class='rounded-circle ml-5'>
            @else
            <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t31.0-1/p320x320/27709777_590150484666821_2107143794062119924_o.png?_nc_cat=110&_nc_sid=dbb9e7&_nc_ohc=zvj1iAMQtREAX8sv1LN&_nc_ht=scontent-bru2-1.xx&oh=afbf67d12d6c619f907386fabb1c2af7&oe=5F161A4D" style='width:200px' class='rounded-circle ml-5'>
            @endif
            @auth
                    @if(Auth::user()->id == $id)
                        <a class="edit-image" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-edit"></i></a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Image de profile</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <form action="/update/profile/pictures" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                        <input type="file" name="file" id="file">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                                    </div>
                                </form>

                              </div>
                            </div>
                          </div>
                    @endif
            @endauth
        </div>

        <!-- pseudo -->
        <div class="col-3">
            <div class="d-flex">
                <div class="h1 mr-3 font-weight-bold">{{ ucfirst($user->pseudo) }}</div>
            </div>
        </div>


        <!-- button -->
        @auth
            @if(Auth::user()->id != $id)
                <div class="col-6">
                    @php $isSub = false; @endphp
                    @foreach ($follow as $item)
                        @if($item['user_id'] == Auth::user()->id)  
                            @php $isSub = true; @endphp
                            
                        @endif
                    @endforeach
                    <div class="d-flex justify-content-end w-100">
                        <button onclick="event.preventDefault();
                        document.getElementById('sub-form').submit();" id="btn_follow" class="btn btn-lg pt-1 pb-1 font-weight-bold sub-button" @if($isSub) disabled @endif>@if($isSub) Abonné @else S abonner @endif</button>
                    </div>
                </div>
                <form id="sub-form" action="{{ route('follow.user') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="number" name="id" id="" value={{Auth::user()->id}}>
                    <input type="number" name="target_id" id="" value={{$id}}>
                </form>
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

        <div class="col-8"><hr style="height:2px; background-color:#cccccc">
        </div>

        <div class="col-2">
        </div>

    </div>

    @yield('profile_content')


</div>

@endsection
