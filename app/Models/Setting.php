<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pseudo'
    ];
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
