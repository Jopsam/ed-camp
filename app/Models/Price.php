<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'cost',
        'active',
    ];

    //====================== RELATIONSHIP ======================
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
