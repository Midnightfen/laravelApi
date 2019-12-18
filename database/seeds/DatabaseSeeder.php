<?php

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
            InternsTableSeeder::class,
            SkillsTableSeeder::class,
            InternSkillTableSeeder::class
        ]);
    }
}
