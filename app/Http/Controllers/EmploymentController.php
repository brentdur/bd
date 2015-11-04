<?php

namespace App\Http\Controllers;

use App\Employment;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmploymentController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only'=>'create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employments = Employment::get();
        return view('employment.index')->with('employments', $employments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employment::create($request->all());
        return redirect('employment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employment = Employment::findOrFail($id);
        return view('employment.single')->with('employment', $employment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employment = Employment::findOrFail($id);
        $start_date = $employment->start_date->format('Y-m-d');
        $end_date = "";
        if($employment->end_date != "") {
            $end_date = $employment->end_date->format('Y-m-d');
        }
        return view('employment.edit')->with('employment', $employment)->with('start_date', $start_date)->with('end_date', $end_date);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employ = Employment::findOrFail($id)->update($request->all());
        return redirect('employment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
