<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
 
    public function role(){
       return $this->belongsToMany(Role::class,'teacher_roles');
    }

}
