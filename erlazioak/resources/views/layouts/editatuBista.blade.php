@extends('../hasiera')
@section('editatu')
<div>
    <h2>{{ $erabiltzailea->izena }} erabiltzailea editatu</h2>
    <form action="/editatu" method="post">
        @csrf
        <input type="text" name="izena" placeholder="Izen berria">
        <input type="text" name="abizena" placeholder="Abizen berria">
        <input type="hidden" name="id" value={{ $erabiltzailea->id }}>
        <input type="submit" value="Gehitu">
    </form>
</div>
@endsection
