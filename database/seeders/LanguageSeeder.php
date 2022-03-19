<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages=[
            ['language'=>'en, English'],
            ['language'=>'fa, فارسی'],
        ];

        foreach($languages as $language ){
            Language::create([
                'language'=> $language['language']
            ]);
        }
    }
}
