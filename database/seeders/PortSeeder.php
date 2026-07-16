<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Port;

class PortSeeder extends Seeder
{
    public function run(): void
    {
        $path = storage_path('app/UpdatedPub150.csv');

        if (!file_exists($path)) {

            $this->command->error('UpdatedPub150.csv tidak ditemukan.');

            return;

        }

        $handle = fopen($path, 'r');

        $header = fgetcsv($handle);

        while (($row = fgetcsv($handle)) !== false) {

            $data = array_combine($header, $row);

            $country = Country::where(
                'name',
                $data['Country Code']
            )->first();

            if (!$country) {

                continue;

            }

            Port::updateOrCreate(

                [

                    'port_name' => $data['Main Port Name']

                ],

                [

                    'country_id' => $country->id,

                    'country' => $data['Country Code'],

                    'latitude' => $data['Latitude'],

                    'longitude' => $data['Longitude']

                ]

            );

        }

        fclose($handle);
    }
}