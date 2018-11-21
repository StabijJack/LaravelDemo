<?php

namespace App\Http\Controllers;

use App\PolymorphicOwnerRight;
use Illuminate\Http\Request;

class PolymorphicOwnerRightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polymorphicOwnerRights = PolymorphicOwnerRight::all();
        return view('polymorphic.right.index', compact('polymorphicOwnerRights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $polymorphicOwnerRight = new PolymorphicOwnerRight;
        return view('polymorphic.right.create', compact('polymorphicOwnerRight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), ['rightname'=> 'required|min:2']);
        $polymorphicOwnerRight = PolymorphicOwnerRight::create($request->all());
        return redirect(route('polymorphicOwnerRight.index'))->with('status', 'New record stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PolymorphicOwnerRight  $polymorphicOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function show(PolymorphicOwnerRight $polymorphicOwnerRight)
    {
        return view('polymorphic.right.show', compact('polymorphicOwnerRight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PolymorphicOwnerRight  $polymorphicOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function edit(PolymorphicOwnerRight $polymorphicOwnerRight)
    {
        return view('polymorphic.right.edit', compact('polymorphicOwnerRight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PolymorphicOwnerRight  $polymorphicOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PolymorphicOwnerRight $polymorphicOwnerRight)
    {
        $this->validate(request(), ['rightname'=> 'required|min:2']);
        $polymorphicOwnerRight->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PolymorphicOwnerRight  $polymorphicOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function destroy(PolymorphicOwnerRight $polymorphicOwnerRight)
    {
        $polymorphicOwnerRight->delete();
        return redirect(route('polymorphicOwnerRight.index'))->with('status', 'Record destroyed!');
    }
}
