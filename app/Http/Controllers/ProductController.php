<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {

        $products = DB::table('products')->get();
        return view('pages.tables.productTable', compact('products'));
    }

    public function create()
    {
        return view('pages.forms.product');
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

		$productData = [

        'product_name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'category_id' => $request->category,
        'store-id' => $request->store,
        'image' => $image_path,
        'status' => $request->status];

		product::create($productData);

        return redirect()->route('products.index')->with('status', 'Product Created Successfully');

    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $product = product::find($id);
        return view('pages\forms\edit_product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product->product_name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category_id= $request->input('category');
        $product->store_id= $request->input('store');
        // $product->image= $request->input('image');
        $product->status= $request->input('status');

        $product->update();

        return redirect()->route('products.index')->with('status','Product Updated Successfully');
    }

    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('status','Product Deleted Successfully');
    }
}
