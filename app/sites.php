<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sites extends Model
{
    protected $guarded = [];

    public function pages(){
        return $this->hasMany(pages::class);
    }
}
