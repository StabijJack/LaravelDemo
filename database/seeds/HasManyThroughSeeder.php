<?php

use Illuminate\Database\Seeder;

class HasManyThroughSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(App\HasManyThroughTop::class, 5)->create()
        ->each(function($top){
            $middles = factory(App\HasManyThroughMiddle::class, 5)->make();
            foreach ($middles as $middle) {
                $top->hasmanythroughmiddles()->save($middle);
                $bottoms = factory(App\HasManyThroughBottom::class, 5)->make();
                foreach ($bottoms as $bottom) {
                    $middle->hasmanythroughbottoms()->save($bottom);
                }
            }
        });

    }
}
