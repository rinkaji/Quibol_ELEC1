<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class finding extends Model
{
    protected $fillable = ['content', 'findings_by', 'patient_id'];
}
