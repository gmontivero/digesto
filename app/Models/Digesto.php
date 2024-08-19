<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Digesto extends Model
{
    use HasFactory;

    protected $fillable = ['numero','titulo','resumen','fecha','pdf','tipo_id'];

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

}
