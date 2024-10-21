<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catFront = new Category();
        $catFront->name = 'Front-End';
        $catFront->icon = 'fa-solid fa-display';
        $catFront->save();
        
        $catBack = new Category();
        $catBack->name = 'Back-End';
        $catBack->icon = 'fa-solid fa-server';
        $catBack->save();

        $catDesign = new Category();
        $catDesign->name = 'Design only';
        $catDesign->icon = 'fa-solid fa-eye';
        $catDesign->save();

    }
}
