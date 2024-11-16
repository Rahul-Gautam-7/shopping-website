<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $category = $request['category']??"";
        if ($category != "")
        {
            $product = Product::where('category','LIKE',$category)->get();
            return view('product.Vr',compact('product'));
        }
        else
        {
            $product=Product::get();
            return View('product.Vr',compact('product'));
        }
       
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('product.productCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('productPhoto'))
        {
            $file=$request->file('productPhoto');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $path='upload/products/';
            $file->move($path, $filename);
        }


        $names=new Product();
        $names->productName=$request->productName;
        $names->description=$request->description;
        $names->price=$request->price;
        $names->category=$request->category;
        $names->productPhoto=$path.$filename;
        $names->save();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
