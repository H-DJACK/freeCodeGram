<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function profileImage()
    {

        return ($this->image) ? "/storage/" . $this->image : "https://cdn-icons-png.flaticon.com/128/3024/3024605.png";
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
