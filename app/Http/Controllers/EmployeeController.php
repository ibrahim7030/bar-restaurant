<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {

        $employees = DB::table('employees')->get();
        return view('pages.tables.employeeTable', compact('employees'));
    }

    public function create()
    {
        return view('pages.forms.employee');
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

		$employeeData = [

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

		employee::create($employeeData);

        // return redirect()->route('employees.index')->with('status', 'employee Created Successfully');
        return redirect()->route('employees.index');
        Alert::success('Congrats', 'employee Created Successfully');

		// return response()->json(['status','employee Added Successfully']);
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $employee = employee::find($id);
        return view('pages\forms\edit_employee', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = employee::find($id);
        $employee->first_name = $request->input('fname');
        $employee->last_name = $request->input('lname');
        $employee->email = $request->input('email');
        $employee->gender= $request->input('gender');
        $employee->birthday= $request->input('birthdate');
        $employee->phone= $request->input('phone');
        $employee->mother_name= $request->input('mother');
        $employee->father_name= $request->input('father');
        $employee->country= $request->input('country');
        $employee->city= $request->input('city');
        $employee->address= $request->input('address');
        // $employee->image= $request->input('image');
        $employee->update();

        return redirect()->route('employees.index')->with('status','Employee Updated Successfully');
    }

    public function destroy($id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->back()->with('status','Employee Deleted Successfully');
    }
}
