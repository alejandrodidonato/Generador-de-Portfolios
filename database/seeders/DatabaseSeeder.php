<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Post;
use App\Models\ProfSkill;
use App\Models\Project;
use App\Models\Responsability;
use App\Models\Service;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Work;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Skill::factory(15)->create();
        Education::factory(18)->create();
        Service::factory(12)->create();
        Project::factory(12)->create();
        Testimonial::factory(12)->create();
        ProfSkill::factory(15)->create();
        Work::factory(15)->create();
        Responsability::factory(30)->create();
        Post::factory(15)->create();
    }
}