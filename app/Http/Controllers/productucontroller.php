<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productucontroller extends Controller
{

    public function index()
    {
      $product = product::all();
      return view('aindex',compact('product'));

    }

 
    public function create()
    {
        return view('acreate');
    }

  
    public function store(Request $request)
    {
        $product = new product;

        $product->name = $request->name;
        $product->mnumber = $request->number;
        $product->save();
        
    }

 
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $product = product::find($id);
        return view('aedit',compact('product'));
    }

  
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
        $product->name = $request->name;
        $product->mnumber = $request->number;
        $product->save();
    }


    public function destroy(string $id)
    {
        product::destroy($id);
    }
}
