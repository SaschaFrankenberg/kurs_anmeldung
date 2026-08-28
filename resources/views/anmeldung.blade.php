<x-layout>

    <h1> Melde dich jetzt an </h1>

    @if ($errors->any())
        <pre> {{ implode("\n", $errors->all()) }}</pre>
    @endif
    <form action="/anmeldung" method="POST">
        @csrf
        <pre>
            <label>Dein Name: </label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>

            <label for="email">E-Mail: </label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <label>Kurse: </label>
            <select id="kurs" name="kurs" required>
                <option value="">Bitte auswählen</option>
                @foreach($kurse as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>

            <span>Teilnahme</span><br>
            <label>Vor Ort</label>
            <input type="radio" name="teilnahme" value="vor_ort" required>
              
            <label>Online</label>
            <input type="radio" name="teilnahme" value="online" required>

            <label>Datenschutz akzeptieren</label><br>
            <input type="checkbox" name="datenschutz" value="1" required>

            <label for="startdatum">Startdatum</label><br>
            <input type="date" id="startdatum" name="startdatum">
    
            <span>Interessen</span><br>
            @foreach($interessen as $key => $label)
                <label>
                    <input type="checkbox" name="interessen[]" value="{{ $key }}">
                    {{ $label }}
                </label><br>
            @endforeach

            <label for="bemerkung">Bemerkung</label><br>
            <textarea id="bemerkung" name="bemerkung" rows="4" cols="40" value="{{ old('bemerkung') }}"></textarea><br>
            
            <button type="submit">Anmelden</button>
        </pre>
    </form>
</x-layout>