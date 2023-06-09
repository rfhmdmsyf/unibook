<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table="kategori";

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}
