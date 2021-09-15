<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seekers extends Model
{
    use HasFactory;
    protected $table = 'seekers';

    public function powerdBy()
    {
        return $this->belongsTo('App\Models\Applicant','user_id');
    }
}
