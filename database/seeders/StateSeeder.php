<?php

namespace Database\Seeders;

use App\Models\State;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'name' => 'Alabama',
                'code' => 'AL',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'AK',
                'name' => 'Alaska',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'AZ',
                'name' => 'Arizona',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'AR',
                'name' => 'Arkansas',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'CA',
                'name' => 'California',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'CO',
                'name' => 'Colorado',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'CT',
                'name' => 'Connecticut',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'DE',
                'name' => 'Delaware',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'DC',
                'name' => 'District of Columbia',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'FL',
                'name' => 'Florida',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'GA',
                'name' => 'Georgia',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'HI',
                'name' => 'Hawaii',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'ID',
                'name' => 'Idaho',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'IL',
                'name' => 'Illinois',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'IN',
                'name' => 'Indiana',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'IA',
                'name' => 'Iowa',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'KS',
                'name' => 'Kansas',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'KY',
                'name' => 'Kentucky',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'LA',
                'name' => 'Louisiana',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'ME',
                'name' => 'Maine',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'MD',
                'name' => 'Maryland',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'MA',
                'name' => 'Massachusetts',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'MI',
                'name' => 'Michigan',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'MN',
                'name' => 'Minnesota',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'MS',
                'name' => 'Mississippi',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'MO',
                'name' => 'Missouri',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'MT',
                'name' => 'Montana',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'NE',
                'name' => 'Nebraska',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'NV',
                'name' => 'Nevada',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'NH',
                'name' => 'New Hampshire',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'NJ',
                'name' => 'New Jersey',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'NM',
                'name' => 'New Mexico',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'NY',
                'name' => 'New York',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'NC',
                'name' => 'North Carolina',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'ND',
                'name' => 'North Dakota',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'OH',
                'name' => 'Ohio',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'OK',
                'name' => 'Oklahoma',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'OR',
                'name' => 'Oregon',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'PA',
                'name' => 'Pennsylvania',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'RI',
                'name' => 'Rhode Island',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'SC',
                'name' => 'South Carolina',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'SD',
                'name' => 'South Dakota',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'TN',
                'name' => 'Tennessee',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'TX',
                'name' => 'Texas',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'UT',
                'name' => 'Utah',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'VT',
                'name' => 'Vermont',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'VA',
                'name' => 'Virginia',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'WA',
                'name' => 'Washington',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'WV',
                'name' => 'West Virginia',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'WI',
                'name' => 'Wisconsin',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'code' => 'WY',
                'name' => 'Wyoming',
                'country_id' => 236,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        State::insert($states);
    }
}
