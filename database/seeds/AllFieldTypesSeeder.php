<?php

use Illuminate\Database\Seeder;

class AllFieldTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AllFieldTypes::class, 5)->create();
    }
}
