<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Mozachiko',
            'author' => 'Chika',
            'year' => '2020',
            'publisher' => 'Penerbit Buku',
            'city' => 'Jakarta',
            'cover' => 'Cover.jpg',
            'bookshelf_id' => 1, 
            'category_id' => 1,
        ]);
    }
}
