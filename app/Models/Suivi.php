<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivi extends Model
{
    use HasFactory;


    protected $fillable = [
        'code',
        'centre',
        'niveau',
        'poids',
        'appreciation',
        'taille',
        'appreciation1',
        'autre',
        'appreciation2'
        // 'phone',
        // 'description',
        // 'user_id'

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
