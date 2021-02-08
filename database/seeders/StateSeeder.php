<?php

namespace Database\Seeders;

use App\Models\State;
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
                'country_id' => 236
            ],
            [
                'code' => 'AK',
                'name' => 'Alaska',
                'country_id' => 236
            ],
            [
                'code' => 'AZ',
                'name' => 'Arizona',
                'country_id' => 236
            ],
            [
                'code' => 'AR',
                'name' => 'Arkansas',
                'country_id' => 236
            ],
            [
                'code' => 'CA',
                'name' => 'California',
                'country_id' => 236
            ],
            [
                'code' => 'CO',
                'name' => 'Colorado',
                'country_id' => 236
            ],
            [
                'code' => 'CT',
                'name' => 'Connecticut',
                'country_id' => 236
            ],
            [
                'code' => 'DE',
                'name' => 'Delaware',
                'country_id' => 236
            ],
            [
                'code' => 'DC',
                'name' => 'District of Columbia',
                'country_id' => 236
            ],
            [
                'code' => 'FL',
                'name' => 'Florida',
                'country_id' => 236
            ],
            [
                'code' => 'GA',
                'name' => 'Georgia',
                'country_id' => 236
            ],
            [
                'code' => 'HI',
                'name' => 'Hawaii',
                'country_id' => 236
            ],
            [
                'code' => 'ID',
                'name' => 'Idaho',
                'country_id' => 236
            ],
            [
                'code' => 'IL',
                'name' => 'Illinois',
                'country_id' => 236
            ],
            [
                'code' => 'IN',
                'name' => 'Indiana',
                'country_id' => 236
            ],
            [
                'code' => 'IA',
                'name' => 'Iowa',
                'country_id' => 236
            ],
            [
                'code' => 'KS',
                'name' => 'Kansas',
                'country_id' => 236
            ],
            [
                'code' => 'KY',
                'name' => 'Kentucky',
                'country_id' => 236
            ],
            [
                'code' => 'LA',
                'name' => 'Louisiana',
                'country_id' => 236
            ],
            [
                'code' => 'ME',
                'name' => 'Maine',
                'country_id' => 236
            ],
            [
                'code' => 'MD',
                'name' => 'Maryland',
                'country_id' => 236
            ],
            [
                'code' => 'MA',
                'name' => 'Massachusetts',
                'country_id' => 236
            ],
            [
                'code' => 'MI',
                'name' => 'Michigan',
                'country_id' => 236
            ],
            [
                'code' => 'MN',
                'name' => 'Minnesota',
                'country_id' => 236
            ],
            [
                'code' => 'MS',
                'name' => 'Mississippi',
                'country_id' => 236
            ],
            [
                'code' => 'MO',
                'name' => 'Missouri',
                'country_id' => 236
            ],
            [
                'code' => 'MT',
                'name' => 'Montana',
                'country_id' => 236
            ],
            [
                'code' => 'NE',
                'name' => 'Nebraska',
                'country_id' => 236
            ],
            [
                'code' => 'NV',
                'name' => 'Nevada',
                'country_id' => 236
            ],
            [
                'code' => 'NH',
                'name' => 'New Hampshire',
                'country_id' => 236
            ],
            [
                'code' => 'NJ',
                'name' => 'New Jersey',
                'country_id' => 236
            ],
            [
                'code' => 'NM',
                'name' => 'New Mexico',
                'country_id' => 236
            ],
            [
                'code' => 'NY',
                'name' => 'New York',
                'country_id' => 236
            ],
            [
                'code' => 'NC',
                'name' => 'North Carolina',
                'country_id' => 236
            ],
            [
                'code' => 'ND',
                'name' => 'North Dakota',
                'country_id' => 236
            ],
            [
                'code' => 'OH',
                'name' => 'Ohio',
                'country_id' => 236
            ],
            [
                'code' => 'OK',
                'name' => 'Oklahoma',
                'country_id' => 236
            ],
            [
                'code' => 'OR',
                'name' => 'Oregon',
                'country_id' => 236
            ],
            [
                'code' => 'PA',
                'name' => 'Pennsylvania',
                'country_id' => 236
            ],
            [
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'country_id' => 236
            ],
            [
                'code' => 'RI',
                'name' => 'Rhode Island',
                'country_id' => 236
            ],
            [
                'code' => 'SC',
                'name' => 'South Carolina',
                'country_id' => 236
            ],
            [
                'code' => 'SD',
                'name' => 'South Dakota',
                'country_id' => 236
            ],
            [
                'code' => 'TN',
                'name' => 'Tennessee',
                'country_id' => 236
            ],
            [
                'code' => 'TX',
                'name' => 'Texas',
                'country_id' => 236
            ],
            [
                'code' => 'UT',
                'name' => 'Utah',
                'country_id' => 236
            ],
            [
                'code' => 'VT',
                'name' => 'Vermont',
                'country_id' => 236
            ],
            [
                'code' => 'VA',
                'name' => 'Virginia',
                'country_id' => 236
            ],
            [
                'code' => 'WA',
                'name' => 'Washington',
                'country_id' => 236
            ],
            [
                'code' => 'WV',
                'name' => 'West Virginia',
                'country_id' => 236
            ],
            [
                'code' => 'WI',
                'name' => 'Wisconsin',
                'country_id' => 236
            ],
            [
                'code' => 'WY',
                'name' => 'Wyoming',
                'country_id' => 236
            ]
        ];

        State::insert($states);
    }
}
