@extends('../hasiera')
@section('postIgoBista')
<div>
    {{ $erabiltzailea->izena }} igo post bat
<div class="container border mx-4 mt-4">
    <div class="container">
    <form action="/postIgo" method="POST">
        <input type="text" placeholder="Idatzi zure posta" name="post">
        <input type="hidden"  name="erabiltzailea" value={{ $erabiltzailea->id }}>
        <input type="submit" value="igo">
    </form>           
    </div>
</div>
</div>
@endsection