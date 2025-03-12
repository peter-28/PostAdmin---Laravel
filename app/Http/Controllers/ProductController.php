<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name', 'ASC')->get();
        return view('product.index', compact('products'));
    }

    public function create() {}

    public function store(Request $request)
    {
        Product::create($request->all());
        DB::commit();
        Session::flash('message', ['Berhasil menyimpan data bahan bakar', 'success']);
        return redirect()->back();
    }

    public function show($id) {}
    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return response()->json([
            'data' => $id,
            'message' => 'Product deleted successfully',
            'status' => 200,
        ]);
    }
}
