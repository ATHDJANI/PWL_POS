<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransaksiModel extends Model
{
    protected $table = 't_penjualan';
    protected $primaryKey = 'id_penjualan';
    
    // fillable field
    protected $fillable = [
        'id_penjualan',
        'user_id',
        'pembeli',
        'penjualan_tanggal'
    ];

    // relationship with user
    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }


    public function detailtransaksi(): HasMany
    {
        return $this->hasMany(TransaksiDetailModel::class, 'id_penjualan', 'id_penjualan');
    }
}