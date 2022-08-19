<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {

        $positions = DB::table('positions')->get();
        return view('pages.tables.positionTable', compact('positions'));
    }

    public function create()
    {
        return view('pages.forms.position');
    }

    public function store(Request $request)
    {
		$positionData = [
        'name' => $request->name];

		position::create($positionData);

        return redirect()->route('positions.index')->with('status', 'Position Created Successfully');

    }

    public function count($id)
    {
        $count = DB::table('positions')
        ->where('id',$id)
        ->count();
        return view('admin.index', compact('count'));

        // return view('PhotoFeed.PhotoDetails',['showCounts'=>$showCounts,'id'=>$id]);
    }

    public function edit($id)
    {
        $position = position::find($id);
        return view('pages\forms\edit_position', compact('position'));
    }

    public function update(Request $request, $id)
    {
        $position = position::find($id);
        $position->name = $request->input('name');
        $position->update();

        return redirect()->route('positions.index')->with('status','Position Updated Successfully');
    }

    public function destroy($id)
    {
        $position = position::find($id);
        $position->delete();
        return redirect()->back()->with('status','position Deleted Successfully');
    }
}
