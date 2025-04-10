<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use SoftDeletes; // Naudojame SoftDeletes trait

    protected $fillable = ['name', 'surname', 'address', 'phone', 'city_id'];
    
    protected $dates = ['deleted_at']; // Nurodome, kad tai data

    // Susiejimas su miestu
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
