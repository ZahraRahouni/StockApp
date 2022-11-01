<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nameE',
        'age',
        'dept_id'       
    ];
    public function getDepartement()
    {
        return $this->belongsTo(Departement::class,'dept_id');
    }
}

