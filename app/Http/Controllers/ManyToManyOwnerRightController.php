<?php

namespace App\Http\Controllers;

use App\ManyToManyOwnerRight;
use Illuminate\Http\Request;

class ManyToManyOwnerRightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manyToManyOwnerRights = ManyToManyOwnerRight::all();
        return view('manytomany.right.index', compact('manyToManyOwnerRights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manyToManyOwnerRight = new ManyToManyOwnerRight;
        return view('manytomany.right.create', compact('manyToManyOwnerRight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),['course'=> 'required|min:2']);
        $manyToManyOwnerRight = ManyToManyOwnerRight::create($request->all());
        return redirect(route('manyToManyOwnerRight.index'))->with('status', 'record opgeslagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManyToManyOwnerRight  $manyToManyOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function show(ManyToManyOwnerRight $manyToManyOwnerRight)
    {
        $manyToManyOwnerLefts = $manyToManyOwnerRight->manyToManyOwnerLefts()->get(); 
        return view('manytomany.right.show', compact('manyToManyOwnerRight', 'manyToManyOwnerLefts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManyToManyOwnerRight  $manyToManyOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function edit(ManyToManyOwnerRight $manyToManyOwnerRight)
    {
        $manyToManyOwnerLefts = $manyToManyOwnerRight->manyToManyOwnerLefts()->get(); 

        return view('manytomany.right.edit', compact('manyToManyOwnerRight', 'manyToManyOwnerLefts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManyToManyOwnerRight  $manyToManyOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManyToManyOwnerRight $manyToManyOwnerRight)
    {
        $this->validate(request(),['course'=>'required|min:2']);
        $manyToManyOwnerRight ->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManyToManyOwnerRight  $manyToManyOwnerRight
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManyToManyOwnerRight $manyToManyOwnerRight)
    {
        if($manyToManyOwnerRight->manyToManyOwnerLefts()->count() > 0){
            return back()->with('status','Er zijn nog members');
        }
        $manyToManyOwnerRight->delete();
        return redirect(route('manyToManyOwnerRight.index'))->with('status', 'Record destroyed!');
    }
}
