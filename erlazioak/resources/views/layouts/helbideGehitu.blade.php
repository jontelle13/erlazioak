@extends('../hasiera')
@section('helbideGehitu')
<div>
    Helbide bat sortu {{ $erabiltzailea->izena }}-rentzat
<form action="/gehituHelbide" method="post">
    @csrf
    <input type="text" name="helbidea" placeholder="helbidea">
    <input type="hidden" value={{ $erabiltzailea->id }} name="erabiltzailea">
    <input type="submit" value="gehitu">
</form>
<div class="container border mx-4 mt-4">
    <div class="container">
        <hr>
        <div id="helbideak">
            <ul>
                @foreach($helbideak as $helbidea)
                    <li>
                        <div class="d-flex jsutify-content-around w-auto">
                        <label>{{ $helbidea->helbidea }}</label>
                            <div class="d-flex ml-5">
                                <form action="/kenduHelbide/{{ $helbidea->id }}" method="post">
                                    @csrf
                                    <input type="submit" name="kendu" value="Ezabatu" class="btn btn-danger">
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