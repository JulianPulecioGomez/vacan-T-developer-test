<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return DB::SELECT('call GetCategories()');
    }


    /**
     * Store a newly created resource in storage.
     *
     *
     * @param CategoryRequest $request
     */
    public function store(CategoryRequest $request)
    {
        DB::SELECT("CALL `StoreCategory`('$request->name');");
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     */
    public function show(int $id)
    {
        return DB::SELECT("call `GetCategory`('$id');");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     */
    public function update(int $id,CategoryRequest $request)
    {
        DB::SELECT("CALL `UpdateCategory`('$id','$request->name');");
        return redirect()->route('category.show', ["id" => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     */
    public function destroy(int $id)
    {
        DB::SELECT("CALL `DeleteCategory`('$id');");
        return redirect()->route('category.index');
    }
}
