<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 
        'last_name', 
        'email',
        'major_id', 
        'semester',
    ];

    public function major(){
        return $this->belongsTo(Major::class);
    }  
}
