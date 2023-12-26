<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'departure_location_id', 'intermediate_locations', 'destination_location_id'];

    protected $casts = [
        'intermediate_locations' => 'array',
    ];

    public function departureLocation()
    {
        return $this->belongsTo(Location::class, 'departure_location_id');
    }

    public function destinationLocation()
    {
        return $this->belongsTo(Location::class, 'destination_location_id');
    }
}