<?php

namespace App\Http\Controllers;

use App\HasManyThroughTop;
use Illuminate\Http\Request;

class HasManyThroughTopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasManyThroughTops = HasManyThroughTop::all();
        return view('databaserelations/hasmanythrough.index', compact('hasManyThroughTops'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HasManyThroughTop  $hasManyThroughTop
     * @return \Illuminate\Http\Response
     */
    public function show(HasManyThroughTop $hasManyThroughTop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HasManyThroughTop  $hasManyThroughTop
     * @return \Illuminate\Http\Response
     */
    public function edit(HasManyThroughTop $hasManyThroughTop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HasManyThroughTop  $hasManyThroughTop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasManyThroughTop $hasManyThroughTop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HasManyThroughTop  $hasManyThroughTop
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasManyThroughTop $hasManyThroughTop)
    {
        //
    }
}
