<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Biodata::all();
        return view('index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Biodata::create($request->all());
        return redirect('biodata')->withSuccess('Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $biodata = Biodata::find($id);
        return view('show', ['data'=>$biodata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('edit', ['data'=>$biodata]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $biodata = Biodata::find($id);
        $biodata->update($request->all());
        return redirect('biodata')->withSuccess('Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect('biodata')->withSuccess('Data Berhasil Dihapus!');
    }
}
