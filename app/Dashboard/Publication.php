<?php

namespace App\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'posted_by');
    }
}
