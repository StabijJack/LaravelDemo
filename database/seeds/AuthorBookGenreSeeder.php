<?php

use Illuminate\Database\Seeder;


class AuthorBookGenreSeeder extends Seeder
{
    public function run()
    {
        $genres = factory(App\Genre::class, 3)->create();
        foreach($genres as $genre){
            $authors= factory(App\Author::class, 10)->create();
            foreach($authors as $author){
                $books = factory(App\Book::class,10)->create([
                    'genre_id' => $genre->id
                ]);
                // $books = factory(App\Book::class,10)->make();
                foreach($books as $book){
                    $author->books()->save($book);
                };
            };
        };
    }
}
