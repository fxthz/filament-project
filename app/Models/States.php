<?php

namespace App\Models;

use App\Models\City; // Import the State model
use App\Models\Country; // Import the State model


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class States extends Model
{
    //
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country_id',
        'name',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

        /**
     * Get the state that owns the country.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
