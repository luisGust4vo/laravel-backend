<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Department extends Model
{
    use HasFactory;
public function users(){
    return $this->belongsToMany(User::class);
}
}
