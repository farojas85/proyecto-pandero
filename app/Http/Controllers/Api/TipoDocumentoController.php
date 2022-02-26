<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreTipoDocumentoRequest;
use App\Http\Requests\UpdateTipoDocumentoRequest;
use App\Models\TipoDocumento;
use App\Http\Controllers\Controller;
use App\Http\Resources\TipoDocumentoResource;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TipoDocumentoResource::collection(TipoDocumento::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipoDocumentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoDocumentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDocumento $tipoDocumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoDocumentoRequest  $request
     * @param  \App\Models\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoDocumentoRequest $request, TipoDocumento $tipoDocumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoDocumento  $tipoDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDocumento $tipoDocumento)
    {
        //
    }
}
