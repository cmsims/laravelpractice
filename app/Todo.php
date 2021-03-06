<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
