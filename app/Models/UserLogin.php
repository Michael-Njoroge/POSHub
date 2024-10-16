<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'pos_user_logins';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
