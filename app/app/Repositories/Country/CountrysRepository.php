<?php

namespace App\Repositories\Country;

use App\Models\Country\Country;
use App\Repositories\BaseRepository;

class CountryRepository extends BaseRepository
{
    public function __construct(Country $country)
    {
        parent::__construct($country);
    }
}
