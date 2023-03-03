<?php

namespace App\Http\Controllers;

use App\Models\Remota;
use App\Http\Requests\StoreRemotaRequest;
use App\Http\Requests\UpdateRemotaRequest;

class RemotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRemotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRemotaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function show(Remota $remota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function edit(Remota $remota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRemotaRequest  $request
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRemotaRequest $request, Remota $remota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remota $remota)
    {
        //
    }
}
