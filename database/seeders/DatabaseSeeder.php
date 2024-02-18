<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\BorrowingFactory;
use Faker\Factory as FakerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Book::factory(100)->create();

        // $faker = FakerFactory::create();

        // foreach (range(1, 100) as $index) {
        //     DB::table('borrowings')->insert([
        //         'book_id' => Book::inRandomOrder()->first()->id, // Set a random book ID
        //         'name' => $faker->name,
        //         'borrowed_at' => $faker->dateTimeThisMonth,
        //         'returned_at' => $faker->dateTimeThisMonth,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
