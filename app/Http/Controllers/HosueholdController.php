<?php

namespace App\Http\Controllers;

use App\Hosuehold;
use Illuminate\Http\Request;

class HosueholdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $households = Household::all();
        return view('admin.households.index', compact( 'households', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.households.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $household = Household::where('slug', $slug)->firstOrFail();
        return view('admin.households.show', compact('household'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function edit($slug) {
        $household = Household::where('slug', $slug)->firstOrFail();
        return view('admin.households.show', compact('household'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hosuehold $hosuehold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hosuehold  $hosuehold
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hosuehold $hosuehold)
    {
        //
    }
}
