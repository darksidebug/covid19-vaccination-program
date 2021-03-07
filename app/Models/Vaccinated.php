<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\User;

class Vaccinated extends Model
{
    use HasFactory;

    protected $fillable = [
        'people_id',
        'vaccinator_id'
    ];

    public function person(){
        return $this->belongsTo(Person::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}
