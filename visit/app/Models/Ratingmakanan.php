<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratingmakanan extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the user that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function akun()
    {
        return $this->belongsTo(Akun::class);
    }
    public function makanan()
    {
        return $this->belongsTo(Makanan::class);
    }
}
