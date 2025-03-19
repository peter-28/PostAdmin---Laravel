<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Gembala;
use App\Models\Province;
use App\Models\Regencie;
use Illuminate\Http\Request;

class GembalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::orderBy('name','asc')->get();
        $gembalas = Gembala::with(['province', 'wilayah', 'kecamatan'])->paginate(10);
        return view('admin.gembala.index', compact(['gembalas', 'provinces']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gembala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $gembalas = Gembala::with(['province', 'wilayah', 'kecamatan'])->findOrFail($id);
        return view('admin.gembala.edit', compact('gembalas'));
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

    public function getWilayah($province_id)
    {
        $regencie = Regencie::where('province_id', $province_id)->get();
        return response()->json([
            'result' => $regencie,
            'message' => 'Data regencie berhasil diambil',
            'status' => 200,
        ]);
    }
    public function getkecamatan($regencie_id) {
        $kecamatan = District::where('regencie_id', $regencie_id)->get();
        return response()->json([
           'result' => $kecamatan,
           'message' => 'Data kecamatan berhasil diambil',
           'status' => 200,
        ]);
    }
}
