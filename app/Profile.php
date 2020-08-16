<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'image'
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/nkMc7ToiZSYGruB7OT2uUkHKbu5DaLEfviinGjxN.webp';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class); // profile is gonna have many followers
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
