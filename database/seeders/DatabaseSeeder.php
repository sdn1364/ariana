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
         //\App\Models\User::factory(5)->create();
        $this->call([
            LanguageSeeder::class,
            /*            SectorSeeder::class,
                        ServiceSeeder::class,*/
            ContentSeeder::class,
/*            CareerSeeder::class,*/
        ]);
    }
}
