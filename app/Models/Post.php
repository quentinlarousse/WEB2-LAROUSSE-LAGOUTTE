<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @param $id
     */
    public static function find($id)
    {
    }

    public static function paginate($int)
    {
    }

    public function user() {
        return $this->belongsto('App\User');
    }


}
