<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index()
    {

        // $tables = DB::table('tables')->get();
        $tables = Table::join('stores', 'stores.id', '=', 'tables.store_id')
                ->get(['tables.*', 'stores.name']);

        return view('pages.tables.tableTable', compact('tables'));
    }

    public function create()
    {
        return view('pages.forms.table');
    }

    public function store(Request $request)
    {
		$tableData = [
        'table_name' => $request->name,
        'capacity' => $request->capacity,
        'status' => $request->status,
        'store_id' => $request->store];

		Table::create($tableData);

        return redirect()->route('tables.index')->with('status', 'Table Created Successfully');

    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $table = table::find($id);
        return view('pages\forms\edit_table', compact('table'));
    }

    public function update(Request $request, $id)
    {
        $table = table::find($id);
        $table->table_name = $request->input('name');
        $table->capacity = $request->input('capacity');
        $table->status = $request->input('status');
        $table->store_id = $request->input('store');
        $table->update();

        return redirect()->route('tables.index')->with('status','Table Updated Successfully');
    }

    public function destroy($id)
    {
        $table = table::find($id);
        $table->delete();
        return redirect()->back()->with('status','Table Deleted Successfully');
    }
}
