<?php

namespace Database\Seeders;

use App\Models\Timezone;
use Illuminate\Database\Seeder;

class TimezonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/timezones.json'), true);

        foreach ($data as $tzs) {
            foreach ($tzs as $offset => $timezones) {
                foreach ($timezones as $timezone) {

                   Timezone::create([
                        'offset' => $offset,
                        'label' => $timezone['value'] . ' ' .$offset,
                        'value' => $timezone['value'],
                    ]);
                }
            }
        }
    }
}
