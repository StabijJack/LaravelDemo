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
        // $this->call(UsersTableSeeder::class);
        //factory(App\AllFieldTypes::class,50)->create();
        // factory(App\Category::class,50)->create();
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
    }
}
