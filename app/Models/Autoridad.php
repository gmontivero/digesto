<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoridad extends Model
{
    use HasFactory;

    protected $table = 'autoridades';

    protected $fillable = ['nombre','info','imagen','cargo_id','twitter','instagram','email','facebook'];

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }
}
