<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    public function category()
    {
        return $this->belongsTo('\App\Category');
    }
    
    public function genres()
    {
        return $this->belongsToMany('\App\Genre');
    }
}
