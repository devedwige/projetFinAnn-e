<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'centre',
        'phone',
        'vaccin',
        'description',
        'autre',
        // 'user_id'

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
