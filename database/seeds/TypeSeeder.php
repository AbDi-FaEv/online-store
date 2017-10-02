<?php

use App\Device;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name'       => 'SE',
            'device_id'  => 1,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => '6',
            'device_id'  => 1,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => '6S',
            'device_id'  => 1,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => '7',
            'device_id'  => 1,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => '7 plus',
            'device_id'  => 1,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => 'Galaxy S5',
            'device_id'  => 2,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => 'Galaxy S6',
            'device_id'  => 2,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => 'Galaxy S7',
            'device_id'  => 2,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('types')->insert([
            'name'       => 'Galaxy note 7',
            'device_id'  => 2,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
    }
}
