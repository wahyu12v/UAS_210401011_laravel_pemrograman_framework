<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $primaryKey = 'id';


    protected $fillable = ['judul' ,'id_kategori','id_merek','harga','stok','description','img'];






    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'id_kategori', 'id');
    }

    public function merek(): BelongsTo
    {
        return $this->belongsTo(merek::class, 'id_merek', 'id');
    }
}



