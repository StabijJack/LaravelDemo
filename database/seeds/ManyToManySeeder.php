<?php

use Illuminate\Database\Seeder;

class ManyToManySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(App\ManyToManyOwnerLeft::class, 5)->create()
        ->each(function($u){
            $rights = factory(App\ManyToManyOwnerRight::class, 5)->make();
            foreach ($rights as $right) {
                $u->manyToManyOwnerRights()->save($right,['reden'=> 'daarom' ]);
            }
        });

    }
}
