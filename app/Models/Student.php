<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'last_name',
        'email',
        'status',
        'venezuelan',
        'attendance',
        'phone',
    ];

    //====================== RELATIONSHIP ======================
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
