<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $connection = 'mongodb';

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'categorie_id', 'nama', 'foto', 'produk', 'harga', 'stok', 'sdeskripsi', 'deskripsi'
    ];

    public function getfotoAttribute($value)
    {
        return url('storage/', $value);
    }
}
