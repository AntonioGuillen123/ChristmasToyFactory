<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MininumAge extends Model
{
    //
    use HasFactory;
    protected $table = 'minimumAge';

    protected $fillable = [
        'age',
    ];

}
function toys(){
    return $this->hasMany(Toy::class);
}
