<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AutoridadesBloques extends Pivot
{
    public $incrementing = true;
    protected $table = 'autoridades_bloques';

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}
