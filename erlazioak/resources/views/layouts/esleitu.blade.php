@extends('../hasiera')
@section('esleituHelbide')
<div>
<div class="container border mx-4 mt-4">
    <div class="bg-light d-flex border-bottom">
        <p>Helbide bat esleitu {{ $erabiltzailea->izena }}-ri</p>
    </div>
    <div class="container">
        <hr>
        <div id="helbideak">
            <ul>
                @foreach($helbideak as $helbidea)
                    <li>
                        <div class="d-flex jsutify-content-around w-auto">
                        <label>{{ $helbidea->helbidea }}</label>
                            <div class="d-flex ml-5">
                                <form action="/esleitu" method="get">
                                    @csrf
                                    <input type="hidden" name="erabiltzaile" value={{ $erabiltzailea->id }}>
                                    <input type="hidden" name="helbide" value={{ $helbidea->id }}>
                                    <input type="submit" name="aukeratuErabiltzaile" value="Esleitu helbide hau erabiltzaileari" class="btn btn-info ml-2">
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