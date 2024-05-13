<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataForest;
use App\Models\LogTable;

class DataForestController extends Controller
{
    public function DHT(){
        $DHT = LogTable::all();
        return view('Pages.DataForest.DHT', compact('DHT'));
    }
    public function Forest()
    {
        $forests = DataForest::all();
        return view('Pages.DataForest.Forest', compact('forests'));
    }

    public function create()
    {
        return view('Pages.DataForest.create');
    }

    public function store(Request $request)
    {
        DataForest::create($request->all());
        return redirect()->route('DataForest.Forest');
    }

    public function show($id)
    {
        $forest = DataForest::findOrFail($id);
        return view('Pages.DataForest.show', compact('forest'));
    }

    public function edit($id)
    {
        $forest = DataForest::findOrFail($id);
        return view('Pages.DataForest.edit', compact('forest'));
    }

    public function update(Request $request, $id)
    {
        $forest = DataForest::findOrFail($id);
        $forest->update($request->all());
        return redirect()->route('DataForest.Forest');
    }

    public function destroy($id)
    {
        $forest = DataForest::findOrFail($id);
        $forest->delete();
        return redirect()->route('Pages.DataForest.tree');
    }
}
