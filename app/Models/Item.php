<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{    

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'name', 'country', 'production', 
       'processing' , 'distribution' , 'retail' ,
   ];

   protected $table = "item";
   protected $primaryKey = "itemID";
   public $timestamps = false;

}
