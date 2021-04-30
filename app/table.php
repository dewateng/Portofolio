<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    protected $table = "buku";
    protected $fillable = ["judul", "tahun_pembuatan", "sinopsis", "genre"];
}
