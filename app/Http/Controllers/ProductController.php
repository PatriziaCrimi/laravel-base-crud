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
    return view('products.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // Storing all form data in a variable
    $data = $request->all();
    // Creating a new Object/Instance containing all the form data
    $new_bouquet = new Product();
    // Assigning all the form data to the Instance Variables
    // ---------- OPTION 1 ----------
    $new_bouquet->fill($data);
    /*
    // ---------- OPTION 2 ----------
    $new_bouquet->bouquet_name = $data['bouquet_name'];
    $new_bouquet->size = $data['size'];
    $new_bouquet->price = $data['price'];
    $new_bouquet->flowers_types = $data['flowers_types'];
    $new_bouquet->foliage_type = $data['foliage_type'];
    $new_bouquet->colors = $data['colors'];
    $new_bouquet->season = $data['season'];
    $new_bouquet->bouquet_type = $data['bouquet_type'];
    $new_bouquet->rating = $data['rating'];
    $new_bouquet->description = $data['description'];
    $new_bouquet->notes = $data['notes'];
    */
    // Storing the data
    $new_bouquet->save();
    // Redirecting to a web page (in this case the "products/index" page)
    return redirect()->route('products.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  // Retrieving the data from only ONE Object/Instance of the Class "Product"
  /* ---------- OPTION 1 ----------
    Gli posso anche passare direttamente l'Oggetto/Istanza di tipo "Product", dove "Product" è la Classe/Model e in questo caso non avrò bisogno del Product::find($id)
  */
  public function show(Product $product)
  /* ---------- OPTION 2 ----------
    public function show($id)
    // This will need the following instruction: "Product::find($id)" which is the equivalent of the query:
    SELECT * FROM products WHERE id = <$id>
  */
  {
    // $product = Product::find($id);

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
  public function edit(Product $product)
  {
    // Checking that the ID is valid (Find restituisce NULL se non lo è)
    if($product) {
      $data = [
        'product' => $product,
      ];
      return view('products.edit', $data);
    }
    abort(404);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {
    $data = $request->all();
    // The function "update" does "fill" and "save" simultaneously
    $product->update($data);
    return redirect()->route('products.show', ['product' => $product->id]);
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
