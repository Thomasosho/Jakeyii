<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The roles that belong to the user.
     */
    public function user()
    {
        return $this->hasOne('App\Models\Job', 'id', 'user_id');
    }
}
