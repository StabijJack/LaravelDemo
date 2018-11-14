<?php

namespace App\Http\Controllers;

use App\ManyToManyOwnerLeft;
use Illuminate\Http\Request;

class ManyToManyOwnerLeftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manyToManyOwnerLefts = ManyToManyOwnerLeft::all();
        return view('manytomany.left.index', compact('manyToManyOwnerLefts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manyToManyOwnerLeft = new ManyToManyOwnerLeft;
        return view('manytomany.left.create', compact('manyToManyOwnerLeft'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),['name'=> 'required|min:2']);
        $manyToManyOwnerLeft = ManyToManyOwnerLeft::create($request->all());
        return redirect(route('manyToManyOwnerLeft.index'))->with('status', 'record opgeslagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManyToManyOwnerLeft  $manyToManyOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function show(ManyToManyOwnerLeft $manyToManyOwnerLeft)
    {
        $manyToManyOwnerRights = $manyToManyOwnerLeft->manyToManyOwnerRights()->get(); 
        return view('manytomany.left.show', compact('manyToManyOwnerLeft', 'manyToManyOwnerRights'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManyToManyOwnerLeft  $manyToManyOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function edit(ManyToManyOwnerLeft $manyToManyOwnerLeft)
    {
        $manyToManyOwnerRights = $manyToManyOwnerLeft->manyToManyOwnerRights()->get(); 
        return view('manytomany.left.edit', compact('manyToManyOwnerLeft', 'manyToManyOwnerRights'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManyToManyOwnerLeft  $manyToManyOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManyToManyOwnerLeft $manyToManyOwnerLeft)
    {
        $this->validate(request(),['name'=>'required|min:2']);
        $manyToManyOwnerLeft ->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManyToManyOwnerLeft  $manyToManyOwnerLeft
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManyToManyOwnerLeft $manyToManyOwnerLeft)
    {
       
        if($manyToManyOwnerLeft->manyToManyOwnerRights()->count() > 0){
            return back()->with('status','Er zijn nog members');
        }
        $manyToManyOwnerLeft->delete();
        return redirect(route('manyToManyOwnerLeft.index'))->with('status', 'Record destroyed!');

    }
}
