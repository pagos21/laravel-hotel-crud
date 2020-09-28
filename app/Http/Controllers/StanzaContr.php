<?php

namespace App\Http\Controllers;
use App\Stanza;
use Illuminate\Http\Request;

class StanzaContr extends Controller
{

    public function home(){
      return view('home');
    }
    public function rooms(){
      $stanze = Stanza::all();
      return view('stanze', compact("stanze"));
    }

    public function show($id){
      $stanzaDesc = Stanza::findOrFail($id);
      return view('stanzaD', compact('stanzaDesc'));
    }
    public function create(){
      return view('roomForm');
    }
    public function store(Request $request){ // nella request sono contenuti i value del form
      $data = $request -> all();
      $room = Stanza::create($data);
      return redirect() -> route('rooms');
    }
}
