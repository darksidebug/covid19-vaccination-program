<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinatedInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'person_id',
        'vaccinator_id',
        'lot_number',
        'batch_number',
        'vaccine_manufacturer'
    ];


    public function person()
    {
        return $this->belongsTo(Person::class, 'id', 'person_id');
    }

    public function vaccinator()
    {
        return $this->belongsTo(User::class);
    }
}
