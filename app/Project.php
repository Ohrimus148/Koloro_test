<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected  $fillable = [ 'name', 'price', 'performer', 'start', 'finish'];

    public function users()
    {
        return $this->belongsToMany('App\Manager');
    }
}
