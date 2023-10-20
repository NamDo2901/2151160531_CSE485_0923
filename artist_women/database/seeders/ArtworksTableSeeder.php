<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Artwork;
use App\Models\MyClass;
use Faker\Factory as Faker;


class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artworks')->delete();
        $faker =Faker::create();
        for ($i=0;$i<100;$i++){
        Artwork::create([
            'artist_name'=> $faker->name(10),
            'description'=> $faker->sentence(7),
            'art_type' => $faker->randomElement(['hội họa','âm nhạc','văn học']),
            'media_link'=> $faker->url(10),
            'cover_image'=> $faker->url(10),
           ]);
        }
    }
}
