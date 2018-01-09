<?php

use Illuminate\Database\Seeder;

class PartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Part::class, 30)->create()->each(function($spending){

        });
    }
}
