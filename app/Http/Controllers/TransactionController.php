<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Transaction;
use \App\Customer;
use \App\Product;
use \App\TemporarySalesTransaction as temp;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Transaction::join('customers', 'sales_transactions.customer_id', '=', 'customers.id')
        ->join('products', 'sales_transactions.product_id', '=', 'products.id')
        ->select('sales_transactions.*', 'customers.name AS customer_name', 'products.name as product_name', 'products.barcode as product_barcode')
        ->get()->toArray();
        return view('admin.transaction.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = temp::join('customers', 'temporary_sales_transactions.customer_id', '=', 'customers.id')
        ->join('products', 'temporary_sales_transactions.product_id', '=', 'products.id')
        ->select('temporary_sales_transactions.*', 'customers.name AS customer_name', 'products.name as product_name', 'products.barcode as product_barcode')
        ->get()->toArray();
        $customer = Customer::select('id', 'name')->get()->toArray();
        $product = Product::select('id', 'name')->get()->toArray();
        $data = ['customer' => $customer, 'product' => $product];
        return view('admin.transaction.create', compact('data'), compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = ['customer_id' => $request->customer_id, 'product_id' => $request->product_id, 'qty' => $request->qty];
        temp::create($data);
        Transaction::create($data);
        return back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
