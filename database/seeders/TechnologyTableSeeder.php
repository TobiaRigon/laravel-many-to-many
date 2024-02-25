<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use App\Models\Project;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology :: factory()
                    ->count(7)
                    ->create()
                    ->each(function($technology){
                        $projects = Project :: inRandomOrder()-> limit(3)->get();

                        // dd($projects);

                        $technology -> projects()-> attach($projects);
                        $technology -> save();
                    });
    }

}
