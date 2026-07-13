<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Country;

class CountryService
{
    public function syncCountries()
    {
        $response = Http::get('https://restcountries.com/v3.1/all');

        if (!$response->successful()) {
            return false;
        }

        $countries = $response->json();

        foreach ($countries as $country) {

            Country::updateOrCreate(

                [
                    'code' => $country['cca2'] ?? null
                ],

                [
                    'name'       => $country['name']['common'] ?? '',
                    'capital'    => $country['capital'][0] ?? '',
                    'region'     => $country['region'] ?? '',
                    'population' => $country['population'] ?? 0,
                    'currency'   => array_key_first($country['currencies'] ?? []) ?? '',
                    'flag'       => $country['flags']['png'] ?? '',
                ]
            );

        }

        return true;
    }
}