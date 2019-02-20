<?php

namespace App\Http\Controllers;

use App\ManyToManyPivot;
use App\ManyToManyOwnerLeft;
use App\ManyToManyOwnerRight;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ManyToManyPivotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manyToManyOwnerLefts = ManyToManyOwnerLeft::all();
        $manyToManyOwnerRights = ManyToManyOwnerRight::all();
        $manyToManyPivots = ManyToManyPivot::all();
        return view('databaserelations/manytomany.pivot.index', compact('manyToManyPivots', 'manyToManyOwnerLefts', 'manyToManyOwnerRights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $leftId = request('leftId',0);
        $rightId = request('rightId',0);
        if ($leftId == 0){

            $manyToManyOwnerLefts = ManyToManyOwnerLeft::all();
        }
        else {
            $manyToManyOwnerLefts = ManyToManyOwnerLeft::where('id', '=', $leftId)->get();
        }
        if($rightId == 0){
            $manyToManyOwnerRights = ManyToManyOwnerRight::all();
        }
        else{
            $manyToManyOwnerRights = ManyToManyOwnerRight::where('id', '=', $rightId)->get();
        };
        if ($leftId == 0 and $rightId <> 0) {
            $origin = 'R';
        }
        elseif ($leftId <> 0 and $rightId == 0) {
            $origin = 'L';
        }
        else {
            $origin = '';
        }
        $manyToManyPivot = ManyToManyPivot::make(['id' => 0 ]);// om aan te geven dat het een nieuwe is
        return view('databaserelations/manytomany.pivot.create',compact('manyToManyPivot', 'manyToManyOwnerLefts', 'manyToManyOwnerRights', 'origin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $origin = request('origin', '');
        $this->validate(request(),[
            'reden'=> 'required|min:2' ,
            'many_to_many_owner_left_id' => 'required',
            'many_to_many_owner_right_id' => [
                'required',
                Rule::unique('many_to_many_pivots')->where(function ($query) use ($request){
                    return $query
                        ->whereMany_to_many_owner_left_id($request->many_to_many_owner_left_id)
                        ->whereMany_to_many_owner_right_id($request->many_to_many_owner_right_id);
                }),
            ],
        ],
        [
            'many_to_many_owner_right_id.unique' => __('messages.many_to_many_pivots.error.unique', [
                'many_to_many_owner_left_id' => $request->many_to_many_owner_left_id,
                'many_to_many_owner_right_id' => $request->many_to_many_owner_right_id
            ]),
        ]);

        $manyToManyPivot= ManyToManyPivot::create(request(['reden','many_to_many_owner_left_id','many_to_many_owner_right_id']));
        if ($origin == 'L'){
            $manyToManyOwnerLeft = $manyToManyPivot->manyToManyOwnerLeft;
            return redirect(route('manyToManyOwnerLeft.edit' , compact('manyToManyOwnerLeft')))->with('status', 'Pivot stored!');
        }
        elseif($origin == 'R'){
            $manyToManyOwnerRight = $manyToManyPivot->manyToManyOwnerRight;
            return redirect(route('manyToManyOwnerRight.edit' , compact('manyToManyOwnerRight')))->with('status', 'Pivot stored!');
        }
        return redirect(route('manyToManyPivot.index'))->with('status', 'Pivot stored!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManyToManyPivot  $manyToManyPivot
     * @return \Illuminate\Http\Response
     */
    public function show(ManyToManyPivot $manyToManyPivot)
    {
        $manyToManyOwnerLefts = ManyToManyOwnerLeft::all();
        $manyToManyOwnerRights = ManyToManyOwnerRight::all();
        return view('databaserelations/manytomany.pivot.show', compact('manyToManyPivot', 'manyToManyOwnerLefts', 'manyToManyOwnerRights'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManyToManyPivot  $manyToManyPivot
     * @return \Illuminate\Http\Response
     */
    public function edit(ManyToManyPivot $manyToManyPivot)
    {
        $manyToManyOwnerLefts = ManyToManyOwnerLeft::all();
        $manyToManyOwnerRights = ManyToManyOwnerRight::all();
        return view('databaserelations/manytomany.pivot.edit', compact('manyToManyPivot', 'manyToManyOwnerLefts', 'manyToManyOwnerRights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManyToManyPivot  $manyToManyPivot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManyToManyPivot $manyToManyPivot)
    {
        $this->validate(request(),[
            'reden'=> 'required|min:2',
            'many_to_many_owner_left_id' => 'required',
            'many_to_many_owner_right_id' => [
                'required',
                Rule::unique('many_to_many_pivots')->where(function ($query) use ($request,$manyToManyPivot){
                    return $query
                        ->whereMany_to_many_owner_left_id($request->many_to_many_owner_left_id)
                        ->whereMany_to_many_owner_right_id($request->many_to_many_owner_right_id)
                        ->whereNotIn('id',[$manyToManyPivot->id]);
                }),
            ],
        ],
        [
            'many_to_many_owner_right_id.unique' => __('messages.many_to_many_pivots.error.unique', [
                'many_to_many_owner_left_id' => $request->many_to_many_owner_left_id,
                'many_to_many_owner_right_id' => $request->many_to_many_owner_right_id
            ]),
        ]);
        $manyToManyPivot->update($request->all());
        return back()->with('status', 'Record updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManyToManyPivot  $manyToManyPivot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManyToManyPivot $manyToManyPivot)
    {
        $manyToManyPivot->delete();
        $url = url()->previous();
        if(preg_match('*manyToManyPivot*',$url)){
            return redirect(Route('manyToManyPivot.index'))->with('status', 'Pivot deleted!');
        }

        return back()->with('status', 'Pivot deleted!');
    }
}
