<?php

use App\Party;
use Illuminate\Database\Seeder;

class PartiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Party::create([
            'title' => 'Nottingham',
            'contract_id' => 1,
            'rclass_id' => 2
        ]);

        Party::create([
            'title' => 'Napier',
            'contract_id' => 1,
            'rclass_id' => 2
        ]);
    }
}
