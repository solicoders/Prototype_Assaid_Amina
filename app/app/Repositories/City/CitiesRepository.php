<?php

namespace App\Repositories\City;

use App\Models\City\City;
use App\Repositories\BaseRepository;

class CityRepository extends BaseRepository
{
    public function __construct(City $city)
    {
        parent::__construct($city);
    }
}
