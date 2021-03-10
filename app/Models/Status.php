<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable=[
        'people_id',
        'status'
    ];

    public function isFirstDose()
    {
        $statusArr=explode("-",$this->status);
        if($statusArr[1]!=="1")
        {
            return false;
        }
        return true;
    }

    public function person()
    {
        return $this->belongsTo(Person::class,'id');
    }
}
