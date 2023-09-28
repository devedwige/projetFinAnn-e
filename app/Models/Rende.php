<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rende extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'centre',
        'description'


    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
