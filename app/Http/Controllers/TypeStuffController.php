<?php

namespace App\Http\Controllers;

use App\Models\TypeStuff;

// use Illuminate\Http\Request;
use App\Http\Requests\TypesStuffRequest;

class TypeStuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all data Types Stuff
        $types_stuff = TypeStuff::all();

        return view('type-stuff/content', compact('types_stuff'));
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
    public function store(TypesStuffRequest $request)
    {
        // Get result of validate
        $dataInput = $request->validated();

        // If can't running store process
        if (!TypeStuff::create($dataInput)) {
            // Showing notification error
	        return back()->with('notification_error', 'Type Stuff with code ' . '<b>' . $dataInput['code'] . '</b>' . ' can\'t saved. Please try again!');
	    }
    	return redirect('types_stuff')->with('notification_success', 'Type Stuff with code <b>' . $dataInput['code'] . '</b> has been successfully saved.');
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
        $type_stuff = TypeStuff::where('id', $id)->first();

        return view('type-stuff/detail', compact('type_stuff'));
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
        $type_stuff = TypeStuff::where('id', $id)->first();

        return view('type-stuff/edit', compact('type_stuff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypesStuffRequest $request, $id)
    {
        // Retrieve the first model matching the query constraints
        $stuff = TypeStuff::where('id', $id)->first();

        // Get result of validate
        $dataUpdate = $request->validated();

        // If can't running store process
        if (!$stuff->update($dataUpdate)) {
            // Showing notification error
	        return back()->with('notification_error', 'Type Stuff with code ' . '<b>' . $stuff['code'] . '</b>' . ' can\'t updated. Please try again!');
	    }
    	return redirect()->route('types_stuff.show', $id)->with('notification_success', 'Type Stuff with code <b>' . $stuff['code'] . '</b> has been successfully updated.');
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