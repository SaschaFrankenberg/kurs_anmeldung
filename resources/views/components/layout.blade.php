@props(['title' => "Laravel Kurse"])

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/kurs.css') }}">
</head>

<body>
    <x-nav />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>