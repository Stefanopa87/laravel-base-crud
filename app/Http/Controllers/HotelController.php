<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ospiti;

class HotelController extends Controller
{
    public function home() {

    
        $ospiti = Ospiti::all();
    //  dd($ospiti);


        return view('pages.home', compact('ospiti'));
    }

    //  -------------------------------

    public function ospite($id) {

    
        $ospiti = Ospiti::findOrFail($id);
    //  dd($ospiti);

        return view('pages.ospite', compact('ospiti'));
    }

    //   -------------------------------

    public function create(){

    return view('pages.create');
    }

    //  ---------------------------------

    public function store(Request $request) {

    // dd($request -> all());

    $validate = $request -> validate([
    'name' => 'required|max:255',
    'lastname' => 'required|max:255',
    'date_of_birth' => 'required|date',
    'document_type' => 'required|max:1024',
    'document_number' => 'required|max:1024',
    ]);

    // dd($validate);



    $ospite = Ospiti::create($validate);
    return redirect() -> route('ospite', $ospite -> id);
    }
}
