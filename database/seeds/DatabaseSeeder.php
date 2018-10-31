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
        factory(App\AllFieldTypes::class,50)->create();
        factory(App\Category::class, 10)
            ->create()
                ->each(function ($u) 
                    {
                        for ($i=0; $i < 50; $i++) 
                        { 
                            $u->products()
                            ->save
                                (
                                    factory(App\Product::class)
                                        ->make()
                                );    
                        }
                    }
                );
        factory(App\OneToOneRight::class, 10)
            ->create()
                ->each(function ($u) 
                    { 
                        $u->onetooneleft()
                        ->save
                            (
                                factory(App\OneToOneLeft::class)
                                    ->make()
                            );    
                    }
                );
    }
}
