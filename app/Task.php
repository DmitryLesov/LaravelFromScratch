<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete(Builder $query)
    {

        return $query->where('completed', 0);
    }
}
