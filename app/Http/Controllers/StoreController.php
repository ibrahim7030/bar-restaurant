<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function index()
    {

        $stores = DB::table('stores')->get();
        return view('pages.tables.storeTable', compact('stores'));
    }

    public function create()
    {
        return view('pages.forms.store');
    }

    public function store(Request $request)
    {
		$storeData = [
        'name' => $request->name,
        'status' => $request->status];

		store::create($storeData);

        return redirect()->route('stores.index')->with('status', 'store Created Successfully');

    }

    public function count($id)
    {
        $count = DB::table('stores')
        ->where('id',$id)
        ->count();
        return view('admin.index', compact('count'));

        // return view('PhotoFeed.PhotoDetails',['showCounts'=>$showCounts,'id'=>$id]);
    }

    public function edit($id)
    {
        $store = store::find($id);
        return view('pages\forms\edit_store', compact('store'));
    }

    public function update(Request $request, $id)
    {
        $store = store::find($id);
        $store->name = $request->input('name');
        $store->status = $request->input('status');
        $store->update();

        return redirect()->route('stores.index')->with('status','Store Updated Successfully');
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect()->back()->with('status','Store Deleted Successfully');
    }
}
