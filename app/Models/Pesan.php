<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'user_id',
        'pesan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getIsMeAttribute()
    {
        return $this->user_id == auth()->id();
    }
}
