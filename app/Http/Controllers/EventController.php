<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller {

    public function index() {
        $event = Event::all();
        return view('event', ['event' => $event]);
    }

    public function tambah() {
        return view('create_event');
    }
    
    public function dashboard() {
        $event = Event::All();
        return view('home', ['event' => $event]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nama_event' => 'required',
            'lokasi_event' => 'required',
            'tanggal_event' => 'required'
        ]);

//        Event::create([
//        'nama_event' => $request->nama_event,
//        'lokasi_event' => $request->lokasi_event,
//        'tanggal_event' => $request->tanggal_event,
//            'status' => $request->status,
//        'keterangan' => $request->ket
//        ]);
        
        DB::table('event')->insert([
		'nama_event' => $request->nama_event,
		'lokasi_event' => $request->lokasi_event,
		'tanggal_event' => $request->tanggal_event,
		'status' => $request->status,
            'keterangan' => $request->ket
	]);

        return redirect('/event');
    }

}
