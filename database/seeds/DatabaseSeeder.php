<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AllFieldTypes::class, 5)->create();
        factory(App\OneToOneRight::class, 5)->create()
            ->each(function ($u){ 
                $u->onetooneleft()->save(factory(App\OneToOneLeft::class)->make());    
            });
        factory(App\OneToManyOwner::class, 5)->create()
            ->each(function($u){
                $members=factory(App\OneToManyMember::class, 5)->make();
                foreach ($members as $member) {
                    $u->onetomanymembers()->save($member);
                }
            });
        factory(App\ManyToManyOwnerLeft::class, 5)->create()
            ->each(function($u){
                $rights = factory(App\ManyToManyOwnerRight::class, 5)->make();
                foreach ($rights as $right) {
                    $u->ManyToManyOwnerRights()->save($right,['reden'=> 'daarom' ]);
                }
            });
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
