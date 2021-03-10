<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounselledLocation extends Model
{
    use HasFactory;

    protected $fillable=[
        'person_id',
        'municipality',
        'facility'
    ];


    public function person()
    {
        return $this->belongsTo(Person::class,'id','person_id');
    }
}
