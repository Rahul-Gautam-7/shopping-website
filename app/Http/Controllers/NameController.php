<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NameController extends Controller
{
    
    public function index()
    {
        return View('user.register');
       
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
        if($request->has('image'))
        {
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $path='upload/category/';
            $file->move($path,$filename);
        }


        $names=new Name();
        $names->name=$request->name;
        $names->email=$request->email;
        $names->password=$request->password;
        $names->image=$request->$path.$filename;
        $names->save();

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Name $name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Name $name)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Name $name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Name $name)
    {
        //
    }
}
