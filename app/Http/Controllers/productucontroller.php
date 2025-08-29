<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $product = product::all();
      return view('aindex',compact('product'));

    }

    
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('acreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new product;

        $product->name = $request->name;
        $product->mnumber = $request->number;
        $product->save();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('aedit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
        $product->name = $request->name;
        $product->mnumber = $request->number;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy($id);
    }
}
