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

    }

    public function store(Request $request){

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
