<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $informations = Information::all();
        return view('index', compact('informations'));
    }

    public function create(){
        return view('create');
    }

        public function store(Request $request){
            $informations=$request->validate([
                'name'=>'required',
                'language'=>'required',
                'email'=>'required|email',
                'phonenumber'=>'required',
            ]);
            Information::create($informations);
            return redirect()->route('index');
        }

    public function show($id){
        $informations=Information::findOrFail($id);
        return view('show', compact('informations'));
    }

    public function edit($id){
        $informations=Information::findOrFail($id);
        return view('edit', compact('informations'));
    }

    public function update(Request $request, $id){
        $informations=$request->validate([
            'name'=>'required',
            'language'=>'required',
            'email'=>'required|email',
            'phonenumber'=>'required',
        ]);
        $information=Information::findOrFail($id);
        $information->update($informations);
        return redirect()->route('index');
    }

    public function destroy($id){
        $information=Information::findOrFail($id);
        $information->delete();
        return redirect()->route('index');
    }
}
