<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  // This instruction is necessary when Laravel cannot find the db table automatically: it is necessary to specify the name of the table ("products")
  protected $table = "products";
}
