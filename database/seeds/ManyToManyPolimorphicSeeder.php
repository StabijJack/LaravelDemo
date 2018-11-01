<?php

use Illuminate\Database\Seeder;

class ManyToManyPolimorphicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ManyToManyPolymorphicOwnerLeft::class, 5)->create()
            ->each(function($u){
                $rights = factory(App\ManyToManyPolymorphicTag::class, 5)->make();
                foreach ($rights as $right) {
                    $u->tags()->save($right,['reason'=> 'daarom' ]);
                }
            });

        factory(App\ManyToManyPolymorphicOwnerRight::class, 5)->create()
            ->each(function($u){
                $rights = factory(App\ManyToManyPolymorphicTag::class, 5)->make();
                foreach ($rights as $right) {
                    $u->tags()->save($right,['reason'=> 'daarom' ]);
                }
            });

        factory(App\ManyToManyPolymorphicTag::class, 5)->create();
    }
}
