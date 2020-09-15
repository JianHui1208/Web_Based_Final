<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    protected $fillable=['ID', 'DriverID', 'platNo', 'Brand', 'model', 'manufacturerYear', 'colour', 'roadTax', 'insurance'];
    public function car(){
        return $this->belongsTo('App\Models\car');
    }
}
