<?php

namespace App\Http\Controllers;

use App\AllFieldType;
use Illuminate\Http\Request;

class AllFieldTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFieldTypes = AllFieldType::all();

        return view('databaserelations/allfieldtype.index',compact('allFieldTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allFieldType = new AllFieldType;
        return view('databaserelations/allfieldtype/create', compact('allFieldType'));
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

        $allFieldType = AllFieldType::create($request->all());

        return redirect(route('allFieldType.index'))->with('status', 'New record stored!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AllFieldType  $allFieldType
     * @return \Illuminate\Http\Response
     */
    public function show(AllFieldType $allFieldType)
    {
        return view('databaserelations/allfieldtype.show',compact('allFieldType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AllFieldType  $allFieldType
     * @return \Illuminate\Http\Response
     */
    public function edit(AllFieldType $allFieldType)
    {
        return view('databaserelations/allfieldtype.edit',compact('allFieldType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AllFieldType  $allFieldType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllFieldType $allFieldType)
    {
        $this->validate(request(), ['longText' => 'required|min:2']);

        $allFieldType->update($request->all());
        return redirect(route('allFieldType.index'))->with('status', 'Record updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AllFieldType  $allFieldType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllFieldType $allFieldType)
    {
        $allFieldType->delete();
        return redirect(route('allFieldType.index'))->with('status', 'Record destroyed!');
    }
}
