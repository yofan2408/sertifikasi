<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable=[
        'nama_kategori',
        'status_kategori'
    ];
}
