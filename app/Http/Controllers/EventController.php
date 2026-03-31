<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); 
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request) 
    {
        // Pastikan 'Location' dan 'description' masuk di sini
        Event::create([
            'name'          => $request->name,
            'Location'      => $request->Location,    // UBAH JADI L BESAR
            'description'   => $request->description, // Tambahkan ini agar tersimpan
            'event_date'    => $request->event_date,
            'categories_id' => 1, 
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil ditambah!');
    }

    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, string $id)
    {
        $event = Event::findOrFail($id);
    
        $event->update([
            'name'          => $request->name,
            'Location'      => $request->Location,    // Tetap L BESAR
            'description'   => $request->description,
            'event_date'    => $request->event_date,
            'categories_id' => 1,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus!');
    }
}