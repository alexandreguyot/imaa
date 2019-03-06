<?php

use Illuminate\Database\Seeder;
use App\Model\Project;
use Carbon\Carbon;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Super U',
            'city' => 'Nantes',
            'start' => Carbon::parse('2019-01-01'),
            'end' => Carbon::parse('2019-12-31')
        ]);

        Project::create([
            'name' => 'Carrefour',
            'city' => 'Carquefou',
            'start' => Carbon::parse('2019-01-01'),
            'end' => Carbon::parse('2019-12-31')
        ]);
    }
}
