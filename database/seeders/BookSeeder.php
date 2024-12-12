<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "Kamu Jaahat",
            "author" => "GeryMalkist",
            "year" => 2015,
            "publisher" => "Ibu kantin FEBI",
            "city" => "Cianjuu",
            "cover" => "public/cover.jpg",
            "bookshelf_id" => 1
        ]);
    }
}
