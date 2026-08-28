<x-layout>
    <h1>Danke {{ session('name') }}</h1>

    <p>Du hast folgende Daten übergeben:</p>
    <p>Kurs: {{ session('kurs') }}</p>
    <p>Teilnahme: {{ session('teilnahme') }}</p>
    <p>Startdatum: {{ session('startdatum') }}</p>
    <p>Interessen: {{ !empty(session('interessen')) ? implode(', ', session('interessen')) : '—' }}</p>
    <p>Bemerkung: {{ session('bemerkung') }}</p>
    <p>von {{ session('email') }} ist angekommen.</p>
</x-layout>