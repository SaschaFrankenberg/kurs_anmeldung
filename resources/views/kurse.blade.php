<x-layout>
    <h1>Unser Angebot</h1>

    <ul>
        @foreach($kurse as $kurs)
            <li>
                <h2>{{ $kurs['title'] }}</h2>
                <p>{{ $kurs['beschreibung'] }}</p>
            </li>
        @endforeach
    </ul>
</x-layout>