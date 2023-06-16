<?php

namespace App\Http\Controllers;

use App\Models\mystuff;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class MystuffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View

    {
        $data=mystuff::all();
        return view('index')->with('data',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
       
        mystuff::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number,
            'image'=>$request->file('image')->store('myfile','public')
        ]);
        return redirect('/home')->with('msg','added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id):View
    {
        $spacial = mystuff::find($id);
        return view ('show')->with('data',$spacial);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $data=mystuff::find($id);
        return view ('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        
        $data= mystuff::find($id);
        $data->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number,
            'image'=>$request->file('image')->store('myimage','public')
        ]);
       
        
         return redirect('home')->with('message','updated successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( String $id):RedirectResponse
    {
        $data= mystuff::find($id);
        $data->delete();
     
       
        return redirect('/home')->with('message','deleted successfully');

    }
}
