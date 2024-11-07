<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    public function detail(){
        // busca detalhes do usuario, apenas um
        return $this->hasOne(UserDetail::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }


}
