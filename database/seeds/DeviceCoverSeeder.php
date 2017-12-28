<?php

use Illuminate\Database\Seeder;

class DeviceCoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 1,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 2,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 3,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 4,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 5,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 6,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 7,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 8,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 9,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 10,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
        DB::table('device_cover')->insert([
            'device_id' => 1,
            'cover_id' => 11,
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);
    }
}
