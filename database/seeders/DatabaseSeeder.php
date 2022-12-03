<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;
use App\Models\Category;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Ad::truncate();
        Category::truncate();
        User::truncate();

        User::factory(3)->create();
        Category::insert([
            [
            'name'=>'Software developer',
            'slug'=>'softdev',
        ],
        [
            'name'=>'Web developers',
            'slug'=>'webdev',

        ],
        
        [
            'name'=>'Database administrators and architects',
            'slug'=>'dbadmin&arch',
        ]
    ]);

        $ad1 = new Ad;
        $ad1->headline="Naslov 1";
        $ad1->category="it";
        $ad1->slug="prvi-post";
        $ad1->excerpt="Oglas 1, plata, uslovi...";
        $ad1->category_id=1;
        $ad1->save();
        
        Ad::create([
            'headline'=>'Fanancial systems admin manager',
            'slug'=>'drugi-post',
            'excerpt'=>"Responsible for developing designing, maintaining, and supporting the Hyperion applications (HFM, FDM, Hyperion Planning, Essbase, DRM, etc.).",
            'category'=>'it',
            'category_id'=>3
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
