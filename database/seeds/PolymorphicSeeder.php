<?php

use Illuminate\Database\Seeder;

class PolymorphicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PolymorphicOwnerLeft::class, 5)->create()
            ->each(function($u){
                $members=factory(App\PolymorphicMember::class, 5)->make();
                foreach ($members as $member) {
                    $u->members()->save($member);
                }
            });
            factory(App\PolymorphicOwnerRight::class, 5)->create()
            ->each(function($u){
                $members=factory(App\PolymorphicMember::class, 5)->make();
                foreach ($members as $member) {
                    $u->members()->save($member);
                }
            });
    }
}
