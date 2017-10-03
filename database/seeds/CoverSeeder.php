<?php

use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('covers')->insert([
            'image' => '/images/iphone-6-6S-leather-black.jpg',
            'name'    => 'Leather black cover',
            'tag' => 'leather-black-cover',
            'material_id' => 3,
            'price' => 250,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-6-6S-silicon-pink.jpg',
            'name'    => 'Silicon pink cover',
            'tag' => 'silicon-pink-cover',
            'material_id' => 2,
            'price' => 200,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-6-6S-silicon-rick.jpg',
            'name'    => 'Silicon rick 6-6S cover',
            'tag' => '6-6S-silicon-rick-cover',
            'material_id' => 2,
            'price' => 300,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-6-6S-silicon-white.jpg',
            'name'    => 'silicon white cover',
            'tag' => 'silicon-white-cover',
            'material_id' => 2,
            'price' => 150,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-7-leather-space.jpg',
            'name'    => 'Leather space cover',
            'tag' => 'leather-space-cover',
            'material_id' => 3,
            'price' => 200,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-7-plus-leather-hing.jpg',
            'name'    => 'Leather hing cover',
            'tag' => 'leather-black-cover',
            'material_id' => 3,
            'price' => 350,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-SE-leather-blue.jpg',
            'name'    => 'Leather blue cover',
            'tag' => 'leather-blue-cover',
            'material_id' => 3,
            'price' => 150,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-SE-plastic-gomer.jpg',
            'name'    => 'Plastic homer cover',
            'tag' => 'plastic-homer-cover',
            'material_id' => 1,
            'price' => 200,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-SE-plastic-white.jpg',
            'name'    => 'Plastic white cover',
            'tag' => 'plastic-white-cover',
            'material_id' => 1,
            'price' => 200,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-SE-silicon-adv.jpg',
            'name'    => 'Silicon adventure cover',
            'tag' => 'silicon-adventure-cover',
            'material_id' => 3,
            'price' => 350,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('covers')->insert([
            'image' => '/images/iphone-SE-silicon-rick.jpg',
            'name'    => 'Silicon Rick SE cover',
            'tag' => 'silicon-rick-se-cover',
            'material_id' => 3,
            'price' => 300,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
    }
}
