<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    protected $fillable=[
        'name','description','price','ISBN'
    ];

    protected function user(){
        return $this->belongsTo(user::class);
    }
}
