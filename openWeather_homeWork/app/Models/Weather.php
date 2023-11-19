<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $fillable = ['city_id',
        'time',
        'name',
        'latitude',
        'longitude',
        'temperature',
        'pressure',
        'humidity',
        'min_temperature',
        'max_temperature'];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
