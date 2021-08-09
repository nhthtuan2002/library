<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'bookId'=> 1,
                'authorId' => 007,
                'price' => 'cuộc sống',
                'pub_year' => 1999,
            ],
            [
                'bookId'=> 1,
                'authorId' => 001,
                'price' => 'cuộc sống',
                'pub_year' => 1999,
            ],
            [
                'bookId'=> 2,
                'authorId' => 002,
                'price' => 'con người',
                'pub_year' => 1995,
            ],
            [
                'bookId'=> 3,
                'authorId' => 003,
                'price' => 'xã hội',
                'pub_year' => 1997,
            ],
            [
                'bookId'=> 4,
                'authorId' => 004,
                'price' => 'tự nhiên',
                'pub_year' => 1998,
            ],
            [
                'bookId'=> 5,
                'authorId' => 005,
                'price' => 'khoan học',
                'pub_year' => 2000,
            ]
        ]);
    }
}
