@extends('../hasiera')
@section('gehitu')
<div>
    Erabiltzaile bat sortatu
<form action="/gehitu" method="post">
    @csrf
    <input type="text" name="izena" placeholder="izena">
    <input type="text" name="abizena" placeholder="abizena">
    <input type="submit" value="gehitu">
</form>
<div id="lista">

</div>
</div>
@endsection