<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_supplier_product;

class AddSupplierProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier=tbl_supplier_product::get()->toArray();
        return view('MainSupplier',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Add_Supplier_Product');
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
        $res=tbl_supplier_product::create(array(
          'supplier_name'=>$request->get('supplier_name'),
          'phone'=>$request->get('ContactNumber'),
          'supplier_email'=>$request->get('supplier_email'),
          'supplier_password'=>$request->get('password')
        ));
        $res->save();
        return redirect('Supplier');
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
    public function edit($supplier_id)
    {
        //
        $supplier_details=tbl_supplier_product::find($supplier_id);
        return view('updatesupplier',compact('supplier_details','supplier_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $supplier_id)
    {
        //
        $res=tbl_supplier_product::find($supplier_id);
        $res->supplier_name=$request->get('supplier_name');
        $res->phone=$request->get('ContactNumber');
        $res->supplier_email=$request->get('supplier_email');
        $res->supplier_password=$request->get('password');
        $res->save();
        return redirect('Supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($supplier_id)
    {
        //
        $res=tbl_supplier_product::find($supplier_id);
        $res->Delete();
        return redirect('Supplier');
    }
}
