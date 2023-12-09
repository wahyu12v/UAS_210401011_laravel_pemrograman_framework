<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class merek extends Model
{
    use HasFactory;

    protected $table = 'mereks';
    protected $primaryKey = 'id';


    protected $fillable = ['namamerek','nohp','pemilik', 'alamat'];

    public static function getMerek()
    {
        return merek::all();
    }

    public function produk(): HasMany
    {
        return $this->hasMany(produk::class);
    }
}
