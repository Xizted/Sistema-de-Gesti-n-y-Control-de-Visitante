<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        DB::table('cities')->truncate();
        Schema::enableForeignKeyConstraints();

        $cities = json_decode(file_get_contents(public_path('json/cities.json')), true);

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                "state_id" => $city["state_id"],
                "name" => $city["name"],
            ]);
        }
    }
}
