@extends('../hasiera')
@section('lista')
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
    @endsection