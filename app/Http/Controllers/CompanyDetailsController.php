<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetails;
use Illuminate\Http\Request;

class CompanyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['companydetails'] = CompanyDetails::all()->first();
        return view('Administration.SystemInitialization.CompanyDetails.Create',$data);
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
    public function store(Request $request)
    {
        $request->validate([
            'CompnyName' => 'required',
            'Address' => 'required',
            'InternetAddress' => 'required',
            'Email' => 'required'
        ]);

        CompanyDetails::create($request->all());

        return redirect()->route('companydetails.index')
            ->with('success', 'Opreation Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyDetails  $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyDetails $companyDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyDetails  $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyDetails $companyDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyDetails  $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'CompnyName' => 'required',
            'Address' => 'required',
            'InternetAddress' => 'required',
            'Email' => 'required'
        ]);
        $data = request()->except(['_token']);
        CompanyDetails::find($id)->update($data);
      

        return redirect()->route('companydetails.index')
            ->with('success', 'Opreation Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyDetails  $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyDetails $companyDetails)
    {
        //
    }
}
