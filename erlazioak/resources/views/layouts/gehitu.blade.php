@extends('../hasiera')
@section('gehitu')
<div>
    Erabiltzaile bat sortatu
<form action="/gehitu" method="post">
    @csrf
    <input type="text" name="izena" placeholder="izena">
    <input type="text" name="abizena" placeholder="abizena">
    <input type="text" name="adina" placeholder="adina">
    <input type="email" name="email" placeholder="email">
    <input type="date" name="jaiotze_data" placeholder="jaiotze-data">
    <label>Aukeratu</label>
    <select name="generoa" >
        <option value="maskulinoa" >Gizona</option>
        <option value="femeninoa" >Emakumea</option>
    </select>
    <input type="submit" value="gehitu">
</form>
<div class="container border mx-4 mt-4">
    <div class="bg-light d-flex border-bottom">
        <p>Erabiltzaileak</p>
    </div>
    <div class="container">
        <hr>
        <div id="erabiltzaileak">
            <ul>
                @foreach($erabiltzaileak as $erabiltzailea)
                    <li>
                        <div class="d-flex jsutify-content-around w-auto">
                        <label>{{ $erabiltzailea->izena }} {{ $erabiltzailea->abizena }}</label>
                            <div class="d-flex ml-5">
                                <form action="/kendu/{{ $erabiltzailea->id }}" method="post">
                                    @csrf
                                    <input type="submit" name="kendu" value="Ezabatu" class="btn btn-danger">
                                </form>
                                <form action="/editatu/{{ $erabiltzailea->id }}" method="post">
                                    @csrf
                                    <input type="submit" name="editatu" value="Editatu" class="btn btn-info ml-2">
                                </form>
                            </div>
                        </div>
                        <hr>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</div>
@endsection