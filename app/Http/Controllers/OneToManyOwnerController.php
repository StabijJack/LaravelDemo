<?php

namespace App\Http\Controllers;

use App\OneToManyOwner;
use App\OneToManyMember;
use Illuminate\Http\Request;

class OneToManyOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oneToManyOwners = OneToManyOwner::all();
        return view('onetomany.owner.index',compact('oneToManyOwners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oneToManyOwner = new OneToManyOwner;
        view('onetomany.owner.create', compact('oneToManyOwner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),['name' => 'required|min:2']);
        $oneToManyOwner = OnetoManyOwner::create($request->all());
        return redirect(route('oneToManyOwner.index'))->with('status', 'New record stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OneToManyOwner  $oneToManyOwner
     * @return \Illuminate\Http\Response
     */
    public function show(OneToManyOwner $oneToManyOwner)
    {
        $oneToManyMembers = $oneToManyOwner->oneToManyMembers()->get();
        $oneToManyMember = new OneToManyMember;
        return view('onetomany.owner.show', compact('oneToManyOwner','oneToManyMembers','oneToManyMember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OneToManyOwner  $oneToManyOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(OneToManyOwner $oneToManyOwner)
    {
        $oneToManyMembers = $oneToManyOwner->oneToManyMembers()->get();
        $oneToManyMember = new OneToManyMember;
        return view('onetomany.owner.edit', compact('oneToManyOwner','oneToManyMembers','oneToManyMember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OneToManyOwner  $oneToManyOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OneToManyOwner $oneToManyOwner)
    {
        $this->validate(request(), ['name'=> 'required|min:2']);
        $oneToManyOwner->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OneToManyOwner  $oneToManyOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(OneToManyOwner $oneToManyOwner)
    {
        if($oneToManyOwner->oneToManyMembers()->count() > 0){
            return back()->with('status','Er zijn nog members');
        }
        $oneToManyOwner->delete();
        return redirect(route('oneToManyOwner.index'))->with('status', 'Record destroyed!');
    }
}
