<?php

namespace App\Http\Controllers;

use App\OneToManyMember;
use App\OneToManyOwner;
use Illuminate\Http\Request;

class OneToManyMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oneToManyMembers = OneToManyMember::all();
        return view('databaserelations/onetomany.member.index', compact('oneToManyMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // not used because owner is mandatory
        $oneToManyMember = new OneToManyMember;
        return view('databaserelations/onetomany.member.create', compact('oneToManyMember'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OneToManyOwner $oneToManyOwner)
    {
        $this->validate(request(), ['car' => 'required|min:2']);

        $oneToManyMember = $oneToManyOwner->oneToManyMembers()->create(request()->all());

        return back()->with('status', 'New record stored!'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OneToManyMember  $oneToManyMember
     * @return \Illuminate\Http\Response
     */
    public function show(OneToManyMember $oneToManyMember)
    {
        $oneToManyOwner = $oneToManyMember->oneToManyOwner;
        return view('databaserelations/onetomany.member.show', compact('oneToManyMember', 'oneToManyOwner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OneToManyMember  $oneToManyMember
     * @return \Illuminate\Http\Response
     */
    public function edit(OneToManyMember $oneToManyMember)
    {
        return view('databaserelations/onetomany.member.edit', compact('oneToManyMember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OneToManyMember  $oneToManyMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OneToManyMember $oneToManyMember)
    {
        $this->validate(request(), ['car' => 'required|min:2']);

        $oneToManyMember->update($request->all());

        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OneToManyMember  $oneToManyMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(OneToManyMember $oneToManyMember)
    {
        $oneToManyMember->delete();
        $url = url()->previous();
        if(preg_match('*oneToManyMember/[0-9]*',$url)){
            return redirect(Route('oneToManyMember.index'))->with('status', 'Record destroyed!');
        }

        return back()->with('status', 'Record destroyed!');
    }
}
