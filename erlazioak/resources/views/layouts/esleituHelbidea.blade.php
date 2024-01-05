@extends('../hasiera')
@section('esleitu')
<div>
    Esleitu erabiltzailea eta bere bezeroa
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
                        <label>{{ $erabiltzailea->izena }}</label>
                            <div class="d-flex ml-5">
                                <form action="/aukeratuErabiltzaile" method="get">
                                    @csrf
                                    <input type="hidden" name="erabiltzaile" value={{ $erabiltzailea->id }}>
                                    <input type="submit" name="aukeratuErabiltzaile" value="Aukeratu" class="btn btn-info ml-2">
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