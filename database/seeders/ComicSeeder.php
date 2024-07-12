<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        foreach ($comics as $comic) 
        $comic = new Comic();

        $comic->title = $comic['title'];

        $comic-> save();
}
