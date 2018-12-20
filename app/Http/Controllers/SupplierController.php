<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Province;

// use Illuminate\Http\Request;
use App\Http\Requests\SuppliersRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all data Suppliers
        $suppliers = Supplier::all();

        // Show all data Province
        $provinces = Province::all();

        return view('supplier/content', compact('suppliers', 'provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuppliersRequest $request)
    {
        // Get result of validate
        $dataInput = $request->validated();

        // If can't running store process
        if (!Supplier::create($dataInput)) {
            // Showing notification error
	        return back()->with('notification_error', 'Supplier with name ' . '<b>' . $dataInput['name'] . '</b>' . ' can\'t saved. Please try again!');
	    }
    	return redirect('suppliers')->with('notification_success', 'Supplier with name <b>' . $dataInput['name'] . '</b> has been successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the first model matching the query constraints
        $supplier = Supplier::where('id', $id)->first();
        
        return view('supplier/detail', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Retrieve the first model matching the query constraints
        $supplier = Supplier::where('id', $id)->first();

        // Show all data Province
        $provinces = Province::all();

        return view('supplier/edit', compact('supplier', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuppliersRequest $request, $id)
    {
        // Retrieve the first model matching the query constraints
        $supplier = Supplier::where('id', $id)->first();
        
        // Get result of validate
        $dataUpdate = $request->validated();

        if($request->input('is_active') == null){
            $dataUpdate['is_active'] = 0;
        } else{
            $dataUpdate['is_active'] = 1;
        }

        // If can't running store process
        if (!$supplier->update($dataUpdate)) {
            // Showing notification error
	        return back()->with('notification_error', 'Supplier with name ' . '<b>' . $supplier['name'] . '</b>' . ' can\'t updated. Please try again!');
	    }
    	return redirect()->route('suppliers.show', $id)->with('notification_success', 'Supplier with name <b>' . $supplier['name'] . '</b> has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Retrieve the first model matching the query constraints
        $stuff = TypeStuff::where('id', $id)->first();

        // If can't running delete process
        if (!$stuff->delete()) {
            // Showing notification error
			return redirect('types_stuff')->with('notification_error', 'Type Stuff with code <b>' . $stuff['code'] . '</b> can\'t deleted. Please try again!');
		}
        return redirect('types_stuff')->with('notification_success', 'Type Stuff with code <b>' . $stuff['code'] . '</b> has been successfully deleted.');
    }
}