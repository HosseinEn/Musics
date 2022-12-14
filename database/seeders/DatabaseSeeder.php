<?php

namespace Database\Seeders;

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
            UsersTableSeeder::class,
            // ArtistsTableSeeder::class,
            // AlbumsTableSeeder::class, 
            // SongsTableSeeder::class, 
            // TagsTableSeeder::class, 
            // TaggablesTableSeeder::class,
            // LikeablesTableSeeder::class
        ]);
    }
}
