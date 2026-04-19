<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Major;

class MajorController extends Controller
{
    public function index(){
        $majors = Major::all();
        return view('majors.index', ['majors' => $majors]);
    }

    public function create(){
        return view('majors.create');
    }

    public function store(Request $request){
        $data = $request->validate(['name' => 'required']);

        $newCareer = Major::create($data);
        
        return redirect(route('major.index'));
    }

    public function edit(Major $major){
        return view ('majors.edit', ['major' => $major]);
    }

    public function update(Major $major, Request $request){
        $data = $request->validate(['name' => 'required']);

        $major->update($data);

        return redirect(route('major.index'))->with('success', 'Carrera actualizada correctamente');
    }

    public function destroy(Major $major){
        $major -> delete();
        
        return redirect(route('major.index'))->with('success', 'Carrera eliminada correctamente');
    }
    
}
 