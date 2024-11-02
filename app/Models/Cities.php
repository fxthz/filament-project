<?php
namespace App\Models;
use App\Models\State; // Import the State model

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cities extends Model
{
    //

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'state_id',
        'name',
    ];

        /**
     * Get the state that owns the city.
     */
    public function state()
    {
        return $this->belongsTo(States::class);
    }
}
