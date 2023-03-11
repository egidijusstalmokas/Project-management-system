<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'profession',
        'education',
        'location',
        'skils',
        'notes',
        'phone',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
