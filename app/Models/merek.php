<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merek extends Model
{
    use HasFactory;

    protected $fillable = ['namamerek','nohp','pemilik', 'alamat'];

    public static function getMerek()
    {
        return merek::all();
    }
}
