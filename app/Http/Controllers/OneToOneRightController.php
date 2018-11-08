<?php

namespace App\Http\Controllers;

use App\OneToOneRight;
use App\OneToOneLeft;
use Illuminate\Http\Request;

class OneToOneRightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oneToOneRights = OneToOneRight::all();
        return view('onetoone.right.index',compact('oneToOneRights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oneToOneRight = new OneToOneRight;
        return view('onetoone.right.create', compact('oneToOneRight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), ['phone' => 'required|min:2']);

        $oneToOneRight = OneToOneRight::create($request->all());

        return redirect(route('oneToOneRight.index'))->with('status', 'New record stored!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OneToOneRight  $oneToOneRight
     * @return \Illuminate\Http\Response
     */
    public function show(OneToOneRight $oneToOneRight)
    {
        $oneToOneLeft = $oneToOneRight->oneToOneLeft;
        $oneToOneLeft = ($oneToOneLeft) ? $oneToOneLeft :new OneToOneLeft ;
        return view('onetoone.right.show', compact('oneToOneRight','oneToOneLeft'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OneToOneRight  $oneToOneRight
     * @return \Illuminate\Http\Response
     */
    public function edit(OneToOneRight $oneToOneRight)
    {
        return view('onetoone.right.edit', compact('oneToOneRight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OneToOneRight  $oneToOneRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OneToOneRight $oneToOneRight)
    {
        $this->validate(request(), ['phone' => 'required|min:2']);

        $oneToOneRight->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OneToOneRight  $oneToOneRight
     * @return \Illuminate\Http\Response
     */
    public function destroy(OneToOneRight $oneToOneRight)
    {
        if($oneToOneRight->oneToOneLeft()->count() > 0){
            return back()->with('status','Er is nog een owner');
        }
        $oneToOneRight->delete();
        return redirect(route('oneToOneRight.index'))->with('status', 'Record destroyed!');
    }
}
