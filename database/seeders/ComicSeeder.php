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
        foreach ($comics as $comic_data) {
            
            $comic = new Comic();

            $comic->title = $comic_data['title'];
            $comic->description = $comic_data['description'];
            $comic->thumb = $comic_data['thumb'];
            $comic->price = $comic_data['price'];
            $comic->series = $comic_data['series'];
            $comic->sale_date = $comic_data['sale_date'];
            $comic->type = $comic_data['type'];
            $comic->artists = json_encode($comic_data['artists']); // Codifica l'array come JSON

            $comic->save();
        }
    }
}
