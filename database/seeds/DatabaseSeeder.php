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
        $this->call([
            AllFieldTypesSeeder::class,
            OneToOneSeeder::class,
            OneToManySeeder::class,
            ManyToManySeeder::class,
            HasManyThroughSeeder::class,
            PolymorphicSeeder::class,
            ManyToManyPolimorphicSeeder::class,
            AuthorBookGenreSeeder::class
        ]);
    }
}
