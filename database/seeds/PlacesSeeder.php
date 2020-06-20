<?php

use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=100; $i++):
            DB::table('Place')->insert([
                'name' => Str::random(10),
            ]);
        endfor;
    }
}
