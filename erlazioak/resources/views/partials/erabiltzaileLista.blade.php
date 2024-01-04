<li>
    <label>{{ $erabiltzailea->izena }}</label>
    <form action="/erabiltzailea/{{ $erabiltzailea->id }}" method="post">
        @csrf
        <input type="submit" name="kendu" value="Ezabatu" class="btn btn-danger">
    </form>
    <hr>
</li>