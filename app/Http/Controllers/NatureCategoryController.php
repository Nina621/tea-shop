<?php

namespace App\Http\Controllers;

use App\Models\NatureCategory;
use Illuminate\Http\Request;

class NatureCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nature_categories = NatureCategory::all();
        return view('nature_categories.index', ['nature_categories' => $nature_categories]);
    }

    /**
     * Show the form for creating a new resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nature_categories.index');

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
            'nature_category_name' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('nature_categories.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NatureCategory  $natureCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NatureCategory $nature_category)
    {
        return view('nature_categories.show',compact('nature_category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NatureCategory  $natureCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(NatureCategory $nature_category)
    {
        return view('nature_categories.edit',compact('nature_category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NatureCategory  $natureCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NatureCategory $nature_category)
    {
        $request->validate([
            'nature_categories_name',
        ]);
        $nature_category->update($request->all());
        return redirect()->route('nature_categories.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NatureCategory  $nature_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(NatureCategory $nature_category)
    {
        $nature_category->delete();
        return redirect()->back();
    }
}
