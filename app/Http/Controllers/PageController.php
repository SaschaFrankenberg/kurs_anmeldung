<?php

namespace App\Http\Controllers;

use App\Models\Nachricht;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function kurse()
    {
        $kurse = [
            [
                'title' => 'Laravel Einführung',
                'beschreibung' => 'Grundlagen von Laravel'
            ],
            [
                'title' => 'Datenbank Einführung',
                'beschreibung' => 'Grundlagen Datenbank'
            ],
            [
                'title' => 'Netzwerke',
                'beschreibung' => 'Grundlagen Netzwerktechnik'
            ],
        ];
        return view('kurse', compact('kurse'));
    }

    public function anmeldung()
    {
        $kurse = [
            'Laravel Einführung'      => 'Laravel Einführung',
            'Datenbank Einführung'  => 'Datenbank Einführung',
            'Netzwerke'      => 'Netzwerke',
        ];

        $interessen = [
            'Backend'    => 'Backend',
            'Frontend'   => 'Frontend',
            'Datenbank'  => 'Datenbank',
            'Testing'    => 'Testing',
        ];
        return view('anmeldung', compact('kurse', 'interessen'));
    }

    public function auswertung(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'kurs' => 'required|in:Laravel Einführung,Datenbank Einführung,Netzwerke',
            'teilnahme' => 'required|in:vor_ort,online',
            'datenschutz' => 'accepted',
            'startdatum' => 'nullable|date',
            'bemerkung' => 'nullable|string|max:500',
            'interessen' => 'nullable|array',
        ]);

        Nachricht::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'kurs' => $request->input('kurs'),
            'teilnahme' => $request->input('teilnahme'),
            'datenschutz' => $request->has('datenschutz'),
            'startdatum' => $request->input('startdatum'),
            'bemerkung' => $request->input('bemerkung'),
            'interessen' => $request->input('interessen'),
        ]);

        return redirect('/danke')->with([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'kurs' => $request->input('kurs'),
            'teilnahme' => $request->input('teilnahme'),
            'datenschutz' => $request->has('datenschutz'),
            'startdatum' => $request->input('startdatum'),
            'bemerkung' => $request->input('bemerkung'),
            'interessen' => $request->input('interessen'),
        ]);
    }

    public function danke()
    {
        return view('danke');
    }
}
