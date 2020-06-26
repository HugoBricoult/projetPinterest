<form action="post" method="post" enctype="multipart/form-data">
    @csrf
<input type="text" name="title">
<input type="text" name="description">
<input type="file" name="file" id="image">
<input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
<input type="submit" value="Envoyer">
</form>