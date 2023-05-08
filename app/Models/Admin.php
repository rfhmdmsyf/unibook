<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table="buku";
    
    public $timestamps = false;

    public function kategori () {
        return $this->belongsTo(Kategori::class);

    }
    public function penerbit () {
        return $this->belongsTo(Penerbit::class);

    }
}
