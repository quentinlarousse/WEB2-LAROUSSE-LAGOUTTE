<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @param $id
     */

    protected $fillable = [
        'user_id', 'title', 'description'
    ];

    public static function find($id)
    {
    }



    public function user() {
        return $this->belongsto('App\User');
    }


}
