<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $countries = [
            ['country_name' => 'Hrvatska'],
            ['country_name' => 'Srbija'],
            ['country_name' => 'BiH']
        ];

        DB::table('countries')->insert($countries);

        $cities = [
            ['city_name' => 'Osijek', 'country_id' => 1],
            ['city_name' => 'Sl. Brod', 'country_id' => 1],
            ['city_name' => 'Novi Sad', 'country_id' => 2]
        ];

        DB::table('cities')->insert($cities);

        $nature_categories = [
          ['nature_category_name' => 'Organic tea blends'],
          ['nature_category_name' => 'Caffeine free'],
          ['nature_category_name' => 'Art of tea blends']
      ];
      DB::table('nature_categories')->insert($nature_categories);

      $tea_flavors = [
        ['flavor_name' => 'Citrus'],
        ['flavor_name' => 'Spice'],
        ['flavor_name' => 'Fruity']
    ];
    DB::table('tea_flavors')->insert($tea_flavors);

    $teas = [
      ['tea_name' => 'Cleanse Tea','tea_flavor_id' => '1','price' => '23','description' => 'TASTING NOTES: BERRY, CITRUS, SPICE','image' => '/','nature_category_id' => '1','city_id' => '1'],
      ['tea_name' => 'Chaga Chai Mushroom Tea','tea_flavor_id' => '2','price' => '32','description' => 'TASTING NOTES: EARTHY, SAVORY, SPICE ','image' => '/','nature_category_id' => '2','city_id' => '2'],
      ['tea_name' => 'Feel Better Tea','tea_flavor_id' => '3','price' => '28','description' => 'TASTING NOTES: CITRUS, FRUITY, SPICY','image' => '/','nature_category_id' => '3','city_id' => '3']
  ];
  DB::table('teas')->insert($teas);

        User::factory()
            ->count(env('SEED_USER', 5))
            ->create();

        Country::factory()
            ->count(env('SEED_COUNTRY', 5))
            ->create();
          
       City::factory()
            ->count(env('SEED_CITY', 5))
            ->create();

       User::factory()->create([
             'email' => 'admin@admin.com'
            ]);
    }
}