<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $project = new Project();
            $project->project_name = $faker->sentence(3);
            $project->creation_date = $faker->date();
            $project->slug = Str::slug($project->project_name);
            $project->on_work = $faker->boolean();
            $project->visibility = $faker->randomElement(['public','private']);
            $project->save();
        }
    }
}
