<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['owner_id', 'name', 'logo', 'address', 'favorites_count'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'brand_user', 'brand_id', 'user_id')->withTimestamps();
    }
}
