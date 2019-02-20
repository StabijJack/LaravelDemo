<?php

namespace App\Http\Controllers;

use App\PolymorphicOwnerLeft;
use Illuminate\Http\Request;

class PolymorphicOwnerLeftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polymorphicOwnerLefts = PolymorphicOwnerLeft::all();
        return view('databaserelations/polymorphic.left.index', compact('polymorphicOwnerLefts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $polymorphicOwnerLeft = new PolymorphicOwnerLeft;
        return view('databaserelations/polymorphic.left.create', compact('polymorphicOwnerLeft'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), ['leftname'=> 'required|min:2']);
        $polymorphicOwnerLeft = PolymorphicOwnerLeft::create($request->all());
        return redirect(route('polymorphicOwnerLeft.index'))->with('status', 'New record stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PolymorphicOwnerLeft  $polymorphicOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function show(PolymorphicOwnerLeft $polymorphicOwnerLeft)
    {
        return view('databaserelations/polymorphic.left.show', compact('polymorphicOwnerLeft'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PolymorphicOwnerLeft  $polymorphicOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function edit(PolymorphicOwnerLeft $polymorphicOwnerLeft)
    {
        return view('databaserelations/polymorphic.left.edit', compact('polymorphicOwnerLeft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PolymorphicOwnerLeft  $polymorphicOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PolymorphicOwnerLeft $polymorphicOwnerLeft)
    {
        $this->validate(request(), ['leftname'=> 'required|min:2']);
        $polymorphicOwnerLeft->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PolymorphicOwnerLeft  $polymorphicOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function destroy(PolymorphicOwnerLeft $polymorphicOwnerLeft)
    {
        $polymorphicOwnerLeft->delete();
        return redirect(route('polymorphicOwnerLeft.index'))->with('status', 'Record destroyed!');
    }
}
