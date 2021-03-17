<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return new JsonResponse([ product::all()]);
    }


    /**
     * Store a newly created resource in storage.
     * @param ProductRequest $request
     */
    public function store(ProductRequest $request)
    {
        $product = new Product([
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
        ]);
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     */
    public function show(int $id)
    {
        return new JsonResponse([product::query()->findOrFail($id)]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     */
    public function update(ProductRequest $request, int $id)
    {
        $product = product::query()->findOrFail($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;

        $product->save();
        return redirect()->route('product.show', ["id"=>$id]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     */
    public function destroy(int $id)
    {
        $product = product::query()->findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
