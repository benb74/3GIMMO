<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $decimals = 2; // number of decimal places
        $div = pow(10, $decimals);

        for ($i = 1; $i <= 15; $i++) {
            DB::table('properties')->insert(
                [
                    'ref_annonce' => Str::random(8),
                    'prix_annonce' => mt_rand(0.01 * $div, 0.05 * $div) / $div,
                    'surface_habitable' => mt_rand(0.01 * $div, 0.05 * $div) / $div,
                    'nombre_de_piece' => rand(2, 15),
                    'id_seller' => rand(1, 15)
                ]);
        }
    }
}
