<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lane extends Model
{
    protected $primaryKey = 'id';
    
    protected $table = "lanes";
    
    protected $guarded = [];
}
