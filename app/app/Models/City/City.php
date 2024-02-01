<?php

namespace App\Models\Page;

use App\Models\City\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'reference',
        'capital',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
