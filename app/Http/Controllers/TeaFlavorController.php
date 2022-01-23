<?php

namespace App\Http\Controllers;

use App\Models\TeaFlavor;
use Illuminate\Http\Request;

class TeaFlavorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tea_flavors = TeaFlavor::all();
        return view('tea_flavors.index', ['tea_flavors' => $tea_flavors]);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tea_flavors.index');

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
            'flavor_name' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('tea_flavors.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeaFlavor  $teaFlavor
     * @return \Illuminate\Http\Response
     */
    public function show(TeaFlavor $tea_flavor)
    {
        return view('tea_flavors.show',compact('tea_flavor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeaFlavor  $teaFlavor
     * @return \Illuminate\Http\Response
     */
    public function edit(TeaFlavor $tea_flavor)
    {
        return view('tea_flavors.edit',compact('tea_flavor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeaFlavor  $teaFlavor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeaFlavor $tea_flavor)
    {
        $request->validate([
            'flavor_name' => 'required',
        ]);
        $tea_flavor->update($request->all());
        return redirect()->route('tea_flavors.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeaFlavor  $tea_flavor
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeaFlavor $tea_flavor)
    {
        $tea_flavor->delete();
        return redirect()->back();
    }
}
