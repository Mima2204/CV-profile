<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $fillable = ['user_id','School_name','field_of_study','graduation_start_date','graduation_eind_date'];
}
