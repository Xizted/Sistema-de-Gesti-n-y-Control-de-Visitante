<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StateSeeder extends Seeder
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
        DB::table('states')->truncate();
        Schema::enableForeignKeyConstraints();

        $states = json_decode(file_get_contents(public_path('json/states.json')), true);

        foreach ($states as $state) {
            DB::table('states')->insert([
                "id" => $state["id"],
                "name" => $state["name"],
            ]);
        }
    }
}
