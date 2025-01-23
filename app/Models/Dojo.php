<?php

namespace App\Models;

use App\Models\Ninja;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dojo extends Model
{
    protected $fillable = ['name','location','description',];
    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    public function dojo(){
        return $this->hasMany(Ninja::class);
    }


}
