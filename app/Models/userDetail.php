<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    protected $fillable = ['user_id','fullname','desciption','phone','adress','linkdin','email'];
}
