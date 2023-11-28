<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Drink extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'ingredients',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function getPetitionsAttribute()
    {
        return count($this->users);
    }
}
