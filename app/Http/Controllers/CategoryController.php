<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = DB::table('categories')->get();
        return view('pages.tables.categoryTable', compact('categories'));
    }

    public function create()
    {
        return view('pages.forms.category');
    }

    public function store(Request $request)
    {
		$categoryData = [
        'name' => $request->name,
        'status' => $request->status];

		category::create($categoryData);

        return redirect()->route('categories.index')->with('status', 'Category Created Successfully');

    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $category = category::find($id);
        return view('pages\forms\edit_category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        $category->update();

        return redirect()->route('categories.index')->with('status','Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('status','Category Deleted Successfully');
    }
}
