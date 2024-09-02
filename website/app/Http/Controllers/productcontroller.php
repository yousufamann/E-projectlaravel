<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\alert;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.products', compact('product'));
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
        $addproduct = new Product();
        $addproduct->TrackingId = "01" . mt_rand(1000000000, 9999999999);
        $addproduct->ProductName = $request->pname;
        $addproduct->ProductDescription = $request->pdecription;

        if ($request->hasFile('pimage')) {
            $pimage = time() . '_' . $request->pimage->getClientOriginalName();
            $request->pimage->move(public_path('productImage'), $pimage);
            $addproduct->ProductImage = $pimage;
        }
        $addproduct->save();
        return redirect()->back();
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
        $addproduct = Product::find($id);
        $addproduct->ProductName = $request->productname;
        echo 'Fareed';
        die;
        $addproduct->save();
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        // echo'$id';
        DB::select('DELETE FROM `products` WHERE id = "'.$id.'"');
        return redirect()->back();
    }
}
