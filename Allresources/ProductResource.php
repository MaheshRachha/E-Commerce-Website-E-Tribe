<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_product;

class ProductResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res=tbl_product::get()->toArray();
        return view('AvailableProducts',compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AddProduct');
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
        $res=tbl_product::create(array(
          'supplier_id'=>$request->get('supplier_id'),
          'product_name'=>$request->get('product_name'),
          'quantity'=>$request->get('quantity'),
          'image'=>$request->get('image'),
          'price'=>$request->get('price')
        ));
        $res->save();
        return redirect('product');
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
    public function edit($product_id)
    {
        //
        $res=tbl_product::find($product_id);
        return view('UpdateProducts',compact('res','product_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        //
        $res=tbl_product::find($product_id);
        $res->product_name=$request->get('product_name');
        $res->quantity=$request->get('quantity');
        $res->image=$request->get('image');
        $res->price=$request->get('price');
        $res->save();
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        //
        $res=tbl_product::find($product_id);
        $res->Delete();
        return redirect('product');
    }
}
