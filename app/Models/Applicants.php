<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;
    protected $table = 'applicant';

    public function seeker()
    {
        return $this->belongsTo('App\Models\Applicant','user_id');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\ModulesData','job_id');
    }
}
