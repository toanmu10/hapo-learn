<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Hapo Tester',
        //     'email' => 'test@haposoft.com',
        //     'password' => bcrypt('12345678')
        // ]);
        Course::factory()->times(50)->create();
    }
}
