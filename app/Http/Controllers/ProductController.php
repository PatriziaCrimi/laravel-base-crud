<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// This instruction is necessary to find the "Product" model (its namespace "App" must be used to find the model)
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $data = [
        'products' => Product::all() // This is the query to get the data from the db
      ];
      return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // Retrieving the data of only ONE Object/Instance of the Class "Product"
      // It is the equivalent of the query: SELECT * FROM products WHERE id = <$id>
      $product = Product::find($id);
      // Checking that the ID is valid (Find restituisce NULL se non lo è)
      if($product) {
        $data = [
          'product' => $product,
        ];
        return view('products.show', $data);
      }
      abort(404);
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
