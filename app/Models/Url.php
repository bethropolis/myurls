<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'long_url',
        'slug',
        'short_url',
        'clicks',
        'expiry_date',
    ];

    // Define the user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
