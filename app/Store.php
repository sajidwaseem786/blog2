<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
   
    protected $fillale=[
   
        "title","body","image"

    ];

   // protected function settitleAttribute($value){
   //     $this->attributes['title']=ucwords($value);
   // }
 
protected function getBodyAttribute($value){
     return  $this->attributes['title']=ucwords($value);
   }

//    public function user(){


//     return $this->belongsTo('\App\User');
// }

public function user(){

	return $this->belongsTo('\App\User');
}
 
}
