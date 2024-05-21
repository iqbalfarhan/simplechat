<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_id',
        'to_id'
    ];

    public function from()
    {
        return $this->belongsTo(User::class);
    }

    public function to()
    {
        return $this->belongsTo(User::class);
    }

    public function getTujuanAttribute(): User
    {
        if ($this->from_id == auth()->id()) {
            return User::find($this->to_id);
        }
        else {
            return User::find($this->from_id);
        }
    }

    public function pesans()
    {
        return $this->hasMany(Pesan::class);
    }
}
