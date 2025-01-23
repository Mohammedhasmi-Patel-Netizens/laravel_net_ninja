<?php

namespace App\Models;

use App\Models\Dojo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ninja extends Model
{

    protected $fillable = ['name','skill','bio','dojo_id'];
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    public function dojo(){
        return $this->belongsTo(Dojo::class);
    }


}
