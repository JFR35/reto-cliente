<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $fillable = ['autoridad'];

    // Relación: Un rol tiene muchos usuarios
    public function users(){
        return $this->hasMany(User::class);
    }
}
