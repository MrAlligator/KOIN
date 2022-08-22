<?php

namespace App\Http\Controllers;

use App\Models\Importir;
use App\Http\Requests\StoreImportirRequest;
use App\Http\Requests\UpdateImportirRequest;

class ImportirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.importir.list-importir', [
            'title' => 'Data Importir',
            'is_active' => 'imp',
            'no' => 1,
            'importirs' => Importir::all(),
            'imp_count' => Importir::count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImportirRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImportirRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Importir  $importir
     * @return \Illuminate\Http\Response
     */
    public function show(Importir $importir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Importir  $importir
     * @return \Illuminate\Http\Response
     */
    public function edit(Importir $importir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImportirRequest  $request
     * @param  \App\Models\Importir  $importir
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImportirRequest $request, Importir $importir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Importir  $importir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Importir $importir)
    {
        //
    }
}
