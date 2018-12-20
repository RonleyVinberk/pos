<?php

namespace App\Http\Controllers;

use App\Models\Stuff;
use App\Models\TypeStuff;

// use Illuminate\Http\Request;
use App\Http\Requests\StuffsRequest;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all data Stuff
        $stuffs = Stuff::all();

        // Show all data Types Stuff
        $types_stuff = TypeStuff::all();

        return view('stuff/content', compact('stuffs', 'types_stuff'));
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
    public function store(StuffsRequest $request)
    {
        // Get result of validate
        $dataInput = $request->validated();

        // If can't running store process
        if (!Stuff::create($dataInput)) {
            // Showing notification error
	        return back()->with('notification_error', 'Stuff with name ' . '<b>' . $dataInput['name'] . '</b>' . ' can\'t saved. Please try again!');
	    }
    	return redirect('stuffs')->with('notification_success', 'Stuff with name <b>' . $dataInput['name'] . '</b> has been successfully saved.');
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
        $stuff = Stuff::where('id', $id)->first();

        return view('stuff/detail', compact('stuff'));
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
        $stuff = Stuff::where('id', $id)->first();

        // Show all data Types Stuff
        $types_stuff = TypeStuff::all();

        return view('stuff/edit', compact('stuff', 'types_stuff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StuffsRequest $request, $id)
    {
        // Retrieve the first model matching the query constraints
        $stuff = Stuff::where('id', $id)->first();

        // Get result of validate
        $dataUpdate = $request->validated();

        // If can't running store process
        if (!$stuff->update($dataUpdate)) {
            // Showing notification error
	        return back()->with('notification_error', 'Stuff with name ' . '<b>' . $stuff['name'] . '</b>' . ' can\'t updated. Please try again!');
	    }
    	return redirect()->route('stuffs.show', $id)->with('notification_success', 'Stuff with name <b>' . $stuff['name'] . '</b> has been successfully updated.');
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
        $stuff = Stuff::where('id', $id)->first();

        // If can't running delete process
        if (!$stuff->delete()) {
            // Showing notification error
			return redirect('stuffs')->with('notification_error', 'Stuff with name <b>' . $stuff['name'] . '</b> can\'t deleted. Please try again!');
		}
        return redirect('stuffs')->with('notification_success', 'Stuff with name <b>' . $stuff['name'] . '</b> has been successfully deleted.');
    }
}