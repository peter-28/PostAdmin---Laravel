<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Fhk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FhkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fhk = Fhk::paginate(5);
        return view('admin.fhk.index', ['fhk' => $fhk]);
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
        $request->validate([
            'judul' => 'required|string|max:255',
            'tema' => 'required|string|max:255',
            'bacaan_alkitab' => 'required|string|max:255',
            'tanggal_khotbah' => 'required|date',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fhk = new Fhk();
        $fhk->judul = $request->judul;
        $fhk->tema = $request->tema;
        $fhk->bacaan_alkitab = $request->bacaan_alkitab;
        $fhk->tanggal_khotbah = $request->tanggal_khotbah;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('fhk');

            try {
                $file->move($destinationPath, $fileName);
                $fhk->file = 'fhk/' . $fileName;
            } catch (\Exception $e) {
                return back()->with('error', 'Gagal menyimpan file: ' . $e->getMessage());
            }
        }

        $fhk->save();

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
