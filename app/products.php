<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed user_id
 */
class products extends Model
{
    //
    protected $fillable=[
        'name','description','price','ISBN'
    ];

    protected function user(){
        return $this->belongsTo(user::class);
    }


    public function categories(){
        return $this->belongsToMany(category::class)->withTimestamps();
    }
}
