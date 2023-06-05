<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = ['HTML & CSS', 'JS', 'Vue&Vite', 'PHP', 'Laravel',];
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->name = $project;
            $newProject->slug = Str::slug($project, ' ');
            $newProject->save();
        }
    }
}
