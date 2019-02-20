<?php

namespace App\Http\Controllers;

use App\PolymorphicMember;
use App\PolymorphicOwnerLeft;
use App\PolymorphicOwnerRight;
use Illuminate\Http\Request;

class PolymorphicMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polymorphicMembers = PolymorphicMember::all();
        return view('databaserelations/polymorphic.member.index', compact('polymorphicMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $polymorphicOwnerLefts = PolymorphicOwnerLeft::all();
        $polymorphicOwnerRights = PolymorphicOwnerRight::all();
        $polymorphicMember = PolymorphicMember::make(['id' => 0 ]);
        return view('databaserelations/polymorphic.member.create', compact(['polymorphicOwnerLefts','polymorphicOwnerRights','polymorphicMember']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request('polymorphic_owner_left_id') ==  0) {
            $this->validate(request(), ['name'=> 'required|min:2', 'polymorphic_owner_right_id'=> 'required|gt:0']);
            $polymorphicOwnerRight= PolymorphicOwnerRight::where('id', request('polymorphic_owner_right_id'))->first();
            $polymorphicMember = $polymorphicOwnerRight->members()->create(request(['name']));
            return redirect(Route('polymorphicMember.index'))->with('status', 'Record added!');
        }
        elseif (request('polymorphic_owner_right_id')== 0) {
            $this->validate(request(), ['name'=> 'required|min:2', 'polymorphic_owner_left_id'=> 'required|gt:0']);
            $polymorphicOwnerLeft= PolymorphicOwnerLeft::where('id',request('polymorphic_owner_left_id'))->first();
            $polymorphicMember = $polymorphicOwnerLeft->members()->create(request(['name']));
            return redirect(Route('polymorphicMember.index'))->with('status', 'Record added!');
        }
        else back()->with('er moet een owner gekozen zijn');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PolymorphicMember  $polymorphicMember
     * @return \Illuminate\Http\Response
     */
    public function show(PolymorphicMember $polymorphicMember)
    {
        return view('databaserelations/polymorphic.member.show', compact('polymorphicMember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PolymorphicMember  $polymorphicMember
     * @return \Illuminate\Http\Response
     */
    public function edit(PolymorphicMember $polymorphicMember)
    {
        return view('databaserelations/polymorphic.member.edit', compact('polymorphicMember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PolymorphicMember  $polymorphicMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PolymorphicMember $polymorphicMember)
    {
        $this->validate(request(), ['name'=> 'required|min:2']);
        $polymorphicMember->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PolymorphicMember  $polymorphicMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(PolymorphicMember $polymorphicMember)
    {
        $polymorphicMember->delete();
        $url = url()->previous();
        if(preg_match('*polymorphicMember/[0-9]*',$url)){
            return redirect(Route('polymorphicMember.index'))->with('status', 'Record destroyed!');
        }

        return back()->with('status', 'Record destroyed!');
    }
}
