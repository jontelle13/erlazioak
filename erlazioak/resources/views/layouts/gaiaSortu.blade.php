@extends('../hasiera')
@section('gaiaSortu')
<div>
    <div class="container border mx-4 mt-4">
        <div class="container">
            <label>Gai berri bat sortu</label>
            <form action="/gaiaSortu" method="post">
                @csrf
                <input type="text" placeholder="Gaiaren izena" name="gaia">
                <input type="submit" value="Sortu">
            </form>
        </div>
    </div>
    
<div id="gaiak">
    <label>Dauden gaiak</label>
    <hr>
    <ul>
        @foreach($gaiak as $gaia)
            <li>
                <div class="d-flex jsutify-content-around w-auto">
                <label>{{ $gaia->gaia }}</label>
                    <div class="d-flex ml-5">
                        <form action="/kenduGaia/{{ $gaia->id }}" method="get">
                            @csrf
                            <input type="submit" name="kendu" value="Ezabatu" class="btn btn-danger">
                        </form>
                        <form action="/editatuGaia/{{ $gaia->id }}" method="get">
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