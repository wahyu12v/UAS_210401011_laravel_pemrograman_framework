<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $primaryKey = 'id';

    protected $fillable = ['namakategori', 'jenis',];

    public function getKategori()
    {
        return Kategori::all();
    }

    public function produk(): HasMany
    {
        return $this->hasMany(produk::class);
    }

}
