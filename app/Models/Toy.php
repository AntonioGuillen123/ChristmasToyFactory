<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    //
    use HasFactory;

    protected $table = 'toy';
    
    protected $fillable = [
        'name',
        'image',
        'description',
        'minimum_age_id',
    ]; 
}

function minimumAges(){
    return $this->belongsTo(MininumAge::class);
}