<?php

namespace App\Http\Controllers;

use App\AllFieldTypes;
use Illuminate\Http\Request;

class AllFieldTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFieldTypesS = AllFieldTypes::all();

        return view('allfieldtypes.index',compact('allFieldTypesS'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allFieldTypes = new AllFieldTypes;
        return view('allfieldtypes/create', compact('allFieldTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), ['longText' => 'required|min:2']);

        $allFieldTypes = AllFieldTypes::create($request->all());

        return view('allfieldtypes.show',compact('allFieldTypes'));

        // return redirect('/AllFieldTypes');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AllFieldTypes  $allFieldTypes
     * @return \Illuminate\Http\Response
     */
    public function show(AllFieldTypes $allFieldTypes)
    {
        return view('allfieldtypes.show',compact('allFieldTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AllFieldTypes  $allFieldTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(AllFieldTypes $allFieldTypes)
    {
        return view('allfieldtypes.edit',compact('allFieldTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AllFieldTypes  $allFieldTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllFieldTypes $allFieldTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AllFieldTypes  $allFieldTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllFieldTypes $allFieldTypes)
    {
        $allFieldTypes->delete();
        return redirect('/allFieldTypes');
    }
}
