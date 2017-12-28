<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(DeviceSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(CoverSeeder::class);
        $this->call(DeviceCoverSeeder::class);
    }
}
