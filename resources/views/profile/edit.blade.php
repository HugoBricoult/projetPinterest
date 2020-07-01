@extends('/layouts.layoutProfil')



@section('profile_content')
<div class="row justify-content-center">

    <form action="{{ route ('profile.store',$user->id) }}" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            @csrf
            @method("PATCH")
            <label  for="file">Avatar: </label>
            <input type="file" name="image_profile_link" id="image" value="{{ $user->image_profile_link }}">
        </div>
        <div class="form-group">
            <label for="file">Couverture: </label>
            <input type="file" name="image_cover_link" id="image_cover" value="{{ $user->image_cover_link }}">
        </div>

        <div class="form-group">
            <label for="pseudo">Pseudo: </label>
            <input type="text" name="pseudo" value="{{ $user->pseudo }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
            
            <input type="submit" value="Envoyer">
        </div>
    </form>
</div>
@endsection