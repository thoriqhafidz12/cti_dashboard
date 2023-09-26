<?php

namespace App\Http\Controllers;

use App\Models\CatalogModel;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.catalog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CatalogModel $catalogModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatalogModel $catalogModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatalogModel $catalogModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatalogModel $catalogModel)
    {
        //
    }
}
