<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = [];

    public function teacher(){
        return $this->belongsToMany(Teacher::class,'teacher_roles');
     }
}
