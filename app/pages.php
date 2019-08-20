<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $guarded = [];

    public function site(){
        return $this->belongsTo(sites::class);
    }
}
