<?php

namespace App\Http\Controllers;

use App\OneToOneLeft;
use App\OneToOneRight;
use Illuminate\Http\Request;

class OneToOneLeftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oneToOneLefts = OneToOneLeft::all();
        return view('onetoone.onetooneLeft.index',compact('oneToOneLefts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * is not used because owner needed
     */ 
    public function create()
    {
        $oneToOneLeft = new OneToOneLeft;
        return view('onetoone.onetooneLeft.create', compact('oneToOneLeft'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OneToOneRight $oneToOneRight )
    {
        $this->validate(request(), ['name' => 'required|min:2']);

        $oneToOneLeft = $oneToOneRight->oneToOneLeft()->create(request()->all());

        return back()->with('status', 'New record stored!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OneToOneLeft  $oneToOneLeft
     * @return \Illuminate\Http\Response
     */
    public function show(OneToOneLeft $oneToOneLeft)
    {
        $oneToOneRight = $oneToOneLeft->oneToOneRight;
        return view('onetoone.onetooneLeft.show', compact('oneToOneLeft','oneToOneRight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OneToOneLeft  $oneToOneLeft
     * @return \Illuminate\Http\Response
     */
    public function edit(OneToOneLeft $oneToOneLeft)
    {
        return view('onetoone.onetooneLeft.edit', compact('oneToOneLeft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OneToOneLeft  $oneToOneLeft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OneToOneLeft $oneToOneLeft)
    {
        $this->validate(request(), ['name' => 'required|min:2']);

        $oneToOneLeft->update($request->all());

        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OneToOneLeft  $oneToOneLeft
     * @return \Illuminate\Http\Response
     */
    public function destroy(OneToOneLeft $oneToOneLeft)
    {
        $oneToOneLeft->delete();
        return back()->with('status', 'Record destroyed!');
    }
}
