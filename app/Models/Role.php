<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    public function users() : BelongsToMany
    {
        return $this->belongsToMany('App\User');
    }

    public function permissions() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Permission');
    }

    // public static function boot(){
    //     parent::boot();
    //     static::deleting(function($role){
    //         dd($role->permissions()->get()->toArray());
    //     });
    // }
}
