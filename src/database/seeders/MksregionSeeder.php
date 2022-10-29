<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MksregionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MksregionProvinceSeeder::class);
        $this->call(MksregionRegencySeeder::class);
        $this->call(MksregionDistrictSeeder::class);
        $this->call(MksregionVillageSeeder::class);
    }
}