<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teas = Tea::with(['city'])->get();
        return view('teas.index', ['teas' => $teas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teas.index');
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
            'tea_name' => 'required',
            'tea_flavor_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'nature_category_id' => 'required',
            'city_id' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('teas.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function show(Tea $tea)
    {
        return view('teas.show',compact('tea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tea $tea)
    {
        return view('teas.edit',compact('tea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tea $tea)
    {
        $request->validate([
            'tea_name' => 'required',
            'tea_flavor_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'nature_category_id' => 'required',
            'city_id' => 'required',
        ]);

        $tea->update($request->all());

        return redirect()->route('teas.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tea $tea)
    {
        $tea->delete();
        return redirect()->back();
    }
}
