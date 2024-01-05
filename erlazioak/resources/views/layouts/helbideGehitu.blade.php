@extends('../hasiera')
@section('helbideGehitu')
<div>
    Helbide bat sortu
<form action="/gehituHelbide" method="post">
    @csrf
    <input type="text" name="helbidea" placeholder="helbidea">
    <input type="submit" value="gehitu">
</form>
<div class="container border mx-4 mt-4">
    <div class="bg-light d-flex border-bottom">
        <p>Erabiltzaileak</p>
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
                                <form action="/kenduHelbide/{{ $helbidea->id }}" method="post">
                                    @csrf
                                    <input type="submit" name="kendu" value="Ezabatu" class="btn btn-danger">
                                </form>
                                <form action="/editatuHelbide/{{ $helbidea->id }}" method="post">
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