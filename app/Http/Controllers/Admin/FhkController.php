<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Fhk;
use Illuminate\Http\Request;

class FhkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fhk = Fhk::paginate(5);
        return view('admin.fhk.index', ['fhk' => $fhk,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fhk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Fhk::create($request->all());
        return redirect()->route('fhk.index')->with('success', 'FHK created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
