<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    use HasFactory;
    protected $table = "users";
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
