<?php

use Illuminate\Database\Seeder;

class OneToManySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OneToManyOwner::class, 5)->create()
            ->each(function($u){
                $members=factory(App\OneToManyMember::class, 5)->make();
                foreach ($members as $member) {
                    $u->onetomanymembers()->save($member);
                }
            });

    }
}
