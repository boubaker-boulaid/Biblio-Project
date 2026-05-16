<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::all();

        Book::chunk(100, function($books) use ($categories) {
            foreach ($books as $book){
                $book->categories()->syncWithoutDetaching($categories->random());
            }
        });

        
        // $this->call([
        //     CategorySeeder::class,
        // ]);
    }
}
