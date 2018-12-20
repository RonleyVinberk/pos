<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Province;

use App\Http\Requests\ProvincesRequest;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all data Provinces
        $provinces = Province::orderBy('code', 'ASC')->get();

        // Show all data Country
        $countries = Country::all();
        
        return view('province.content', compact('provinces', 'countries'));
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
    public function store(ProvincesRequest $request)
    {
        // Get result of validate
        $dataInput = $request->validated();

        // If can't running store process
        if (!Province::create($dataInput)) {
            // Showing notification error
	        return back()->with('notification_error', 'Province with name ' . '<b>' . $dataInput['name'] . '</b>' . ' can\'t saved. Please try again!');
	    }
    	return redirect('provinces')->with('notification_success', 'Province with name <b>' . $dataInput['name'] . '</b> has been successfully saved.');
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
        $province = Province::where('id', $id)->first();

        return view('province.detail', compact('province'));
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
        $province = Province::where('id', $id)->first();

        // Show all data Country
        $countries = Country::all();

        return view('province.edit', compact('province', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvincesRequest $request, $id)
    {
        // Retrieve the first model matching the query constraints
        $province = Province::where('id', $id)->first();

        // Get result of validate
        $dataUpdate = $request->validated();

        // If can't running store process
        if (!$province->update($dataUpdate)) {
            // Showing notification error
	        return back()->with('notification_error', 'Province with name ' . '<b>' . $province['name'] . '</b>' . ' can\'t updated. Please try again!');
	    }
    	return redirect()->route('provinces.show', $id)->with('notification_success', 'Province with name <b>' . $province['name'] . '</b> has been successfully updated.');
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
        $province = Province::where('id', $id)->first();

        // If can't running delete process
        if (!$province->delete()) {
            // Showing notification error
			return redirect('provinces')->with('notification_error', 'Province with name <b>' . $province['name'] . '</b> can\'t deleted. Please try again!');
		}
        return redirect('provinces')->with('notification_success', 'Province with name <b>' . $province['name'] . '</b> has been successfully deleted.');
    }
}