<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    use HasFactory;

    //protected $fillable = ['nombre','descripcion','precio','fecha'];

    protected $guarded = ['status'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
