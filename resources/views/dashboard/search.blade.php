<form method="GET" action="{{ route('dashboard') }}">

    <input
        type="text"
        name="country"
        placeholder="Contoh : Indonesia"
        value="{{ request('country') }}"
    >

    <button type="submit">

        Cari

    </button>

</form>