<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user['listUser']=Product::all();
        return view('product')->with($user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());die();
        // Validate the request...
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'colour' => 'required',
            'description' => 'required',
            'quality'=> 'required',
            'size' => 'required',
            'thickness' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Handle the file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName, 'gcs');
            $validatedData['image'] = $imageName;
            // $imagePath = $request->file('image')->storeAs('public/images', $imageName, 'gcs');

        }
        
    
        // Store the data in the database
        // Assuming you have a Product model
        Product::create($validatedData);
    
        return redirect()->back()->with('success', 'Product added successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
