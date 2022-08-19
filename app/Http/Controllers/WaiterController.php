<?php

namespace App\Http\Controllers;

use App\Models\waiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class WaiterController extends Controller
{

    public function index()
    {

        $waiters = DB::table('waiters')->get();
        return view('pages.tables.waiterTable', compact('waiters'));
    }

    public function create()
    {
        return view('pages.forms.waiter');
    }


    public function store(Request $request)
    {
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $image_path = '';
       if ($request->hasFile('image')) {
           $image_path = $request->file('image')->store('image', 'public');
        }
        // $file = $request->file('image');
		// $fileName = time() . '.' . $file->getClientOriginalExtension();
		// $file->storeAs('public/images', $fileName);

		$waiterData = [

        'first_name' => $request->fname,
        'last_name' => $request->lname,
        'email' => $request->email,
        'gender' => $request->gender,
        'birthday' => $request->birthdate,
        'phone' => $request->phone,
        'mother_name' => $request->mother,
        'father_name' => $request->father,
        'country' => $request->country,
        'city' => $request->city,
        'address' => $request->address,
        'image' => $image_path];

		waiter::create($waiterData);

        // return redirect()->route('waiters.index')->with('status', 'Waiter Created Successfully');
        return redirect()->route('waiters.index');
        Alert::success('Congrats', 'Waiter Created Successfully');

		// return response()->json(['status','waiter Added Successfully']);
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $waiter = waiter::find($id);
        return view('pages\forms\edit_waiter', compact('waiter'));
    }

    public function update(Request $request, $id)
    {
        $waiter = Waiter::find($id);
        $waiter->first_name = $request->input('fname');
        $waiter->last_name = $request->input('lname');
        $waiter->email = $request->input('email');
        $waiter->gender= $request->input('gender');
        $waiter->birthday= $request->input('birthdate');
        $waiter->phone= $request->input('phone');
        $waiter->mother_name= $request->input('mother');
        $waiter->father_name= $request->input('father');
        $waiter->country= $request->input('country');
        $waiter->city= $request->input('city');
        $waiter->address= $request->input('address');
        // $waiter->image= $request->input('image');
        $waiter->update();

        return redirect()->route('waiters.index')->with('status','Waiter Updated Successfully');
    }

    public function destroy($id)
    {
        $waiter = waiter::find($id);
        $waiter->delete();
        return redirect()->back()->with('status','Waiter Deleted Successfully');
    }
}
