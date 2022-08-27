<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SellerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 17; $i++) {

            DB::table('sellers')->insert(
                [
                    'nom_agent' => Str::random(8),
                    'prenom_agent' => Str::random(8)
                ]);
        }
    }
}
