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

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
