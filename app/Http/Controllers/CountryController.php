<?php

namespace App\Http\Controllers;

use App\Models\Country;

use App\Http\Requests\CountriesRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all data Countries
        $countries = Country::orderBy('name', 'ASC')->get();
        
        return view('country.content', compact("countries"));
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
    public function store(CountriesRequest $request)
    {
        // Get result of validate
        $dataInput = $request->validated();
        $dataInput['created_at'] = NOW();

        // If can't running store process
        if (!Country::create($dataInput)) {
            // Showing notification error
	        return back()->with('notification_error', 'Country with name ' . '<b>' . $dataInput['name'] . '</b>' . ' can\'t saved. Please try again!');
	    }
    	return redirect('countries')->with('notification_success', 'Country with name <b>' . $dataInput['name'] . '</b> has been successfully saved.');
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
        $country = Country::where('id', $id)->first();

        return view('country.detail', compact('country'));
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
        $country = Country::where('id', $id)->first();

        return view('country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountriesRequest $request, $id)
    {
        // Retrieve the first model matching the query constraints
        $country = Country::where('id', $id)->first();

        // Get result of validate
        $dataUpdate = $request->validated();
        $dataUpdate['updated_at'] = NOW();

        // If can't running store process
        if (!$country->update($dataUpdate)) {
            // Showing notification error
	        return back()->with('notification_error', 'Country with name ' . '<b>' . $country['name'] . '</b>' . ' can\'t updated. Please try again!');
	    }
    	return redirect()->route('countries.show', $id)->with('notification_success', 'Country with name <b>' . $country['name'] . '</b> has been successfully updated.');
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
        $country = Country::where('id', $id)->first();

        // If can't running delete process
        if (!$country->delete()) {
            // Showing notification error
			return redirect('countries')->with('notification_error', 'Country with name <b>' . $country['name'] . '</b> can\'t deleted. Please try again!');
		}
        return redirect('countries')->with('notification_success', 'Country with name <b>' . $country['name'] . '</b> has been successfully deleted.');
    }
}