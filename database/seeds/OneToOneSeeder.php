<?php

use Illuminate\Database\Seeder;

class OneToOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OneToOneRight::class, 5)->create()
        ->each(function ($u){ 
            $u->one_to_one_left()->save(factory(App\OneToOneLeft::class)->make());    
        });
    }
}
