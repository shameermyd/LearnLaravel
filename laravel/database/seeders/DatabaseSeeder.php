<?php

namespace Database\Seeders;

use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create(); //to create faker data from ListingFactory(database/factories/ListigFctory.php)
        //Run in Terminal : php artisan migrate:refresh --seed
    }
}
