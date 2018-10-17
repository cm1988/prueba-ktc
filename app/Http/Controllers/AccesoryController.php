<?php

namespace App\Http\Controllers;

use App\Accesory;
use Illuminate\Http\Request;

class AccesoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesory = Accesory::latest()->paginate(5);
        return view('accesory.index',compact('accesory'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'sku' => 'required',
            'description' => 'required',
            'accesory_type_id' => 'required'
        ]);

        Accesory::create($request->all());



        return redirect()->route('accesory.index')

            ->with('success','Accesory created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function show(Accesory $accesory)
    {
        return view('accesory.show',compact('accesory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesory $accesory)
    {
        return view('accesory.edit',compact('accesory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesory $accesory)
    {
        $accesory->update($request->all());



        return redirect()->route('accesory.index')

            ->with('success','Accesory updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesory $accesory)
    {
        $accesory->delete();



        return redirect()->route('accesory.index')

            ->with('success','Accesory deleted successfully');

    }
}
