@extends('../hasiera')
@section('postIgoBista')
<div>
    {{ $erabiltzailea->izena }} igo post bat
<div class="container border mx-4 mt-4">
    <div class="container">
    <form action="/postIgo" method="post">
        @csrf
        <input type="text" placeholder="Idatzi zure posta" name="post">
        <input type="hidden"  name="erabiltzailea" value={{ $erabiltzailea->id }}>
        <input type="submit" value="Igo">
    </form>           
    </div>
</div>
<div id="postak">
    <label>Zure postak</label>
    <hr>
    <ul>
        @foreach($postak as $posta)
            <li>
                <div class="d-flex jsutify-content-around w-auto">
                <label>{{ $posta->post }}</label>
                    <div class="d-flex ml-5">
                        <form action="/kenduPost/{{ $posta->id }}" method="get">
                            @csrf
                            <input type="submit" name="kendu" value="Ezabatu" class="btn btn-danger">
                        </form>
                        <form action="/editatuPost/{{ $posta->id }}" method="get">
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
@endsection