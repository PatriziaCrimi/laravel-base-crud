<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /*
  This instruction is necessary when Laravel cannot find the db table automatically: it is necessary to specify the name of the table ("products")
  */
  // protected $table = 'products';

  /* This instruction is necessary to indicate which of the data can be filled automatically
  It is necessary to prevent the request for a Token value to be filled in the form data
  It is ONLY necessary when using both:
    - the Blade Token @csrf
    - the function "fill": $new_bouquet->fill($data)
  */
  protected $fillable = ['bouquet_name', 'size', 'price', 'flowers_types', 'foliage_type', 'colors', 'season', 'bouquet_type', 'rating', 'description', 'notes'];
}
