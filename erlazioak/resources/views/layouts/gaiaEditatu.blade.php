<div>
    <form action="/editatutaGaia" method="post">
        @csrf
        <input type="text" value={{ $gaia->gaia }} name='gaia'>
        <input type="hidden" value={{ $gaia->id }} name='gaiaId'>
        <input type="submit" value="editatu">
    </form>
</div>