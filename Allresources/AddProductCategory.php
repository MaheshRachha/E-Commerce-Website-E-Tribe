<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_product_category;

class AddProductCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res=tbl_product_category::get()->toArray();
        return view('AvailableProductCategories',compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Add_Product_Category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $res=tbl_product_category::create(array(
          'product_id'=>$request->get('product_id'),
          'category_name'=>$request->get('category_name'),
          'description'=>$request->get('description'),
          'image'=>$request->get('image'),
        ));
        $res->save();
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        //
        $res=tbl_product_category::find($category_id);
       return view('updateProductCategory',compact('res','category_id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id)
    {
        //
        $res=tbl_product_category::find($category_id);
       $res->category_name=$request->get('category_name');
       $res->description=$request->get('description');
       $res->image=$request->get('image');
       $res->save();
           return redirect('category');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id)
    {
        //
        $res=tbl_product_category::find($category_id);
        $res->Delete();
        return redirect('category');
    }
}
