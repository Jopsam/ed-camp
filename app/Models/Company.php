<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'phone',
    ];

    //====================== RELATIONSHIP ======================
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
