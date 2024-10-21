<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techCSS = new Technology();
        $techCSS->name = 'CSS';
        $techCSS->icon = 'fa-brands fa-css3';
        $techCSS->save();
        
        $techBootStrap = new Technology();
        $techBootStrap->name = 'Bootstrap';
        $techBootStrap->icon = 'fa-brands fa-bootstrap';
        $techBootStrap->save();
        
        $techJS = new Technology();
        $techJS->name = 'JavaScript';
        $techJS->icon = 'fa-brands fa-js';
        $techJS->save();
        
        $techVueJs = new Technology();
        $techVueJs->name = 'Vuejs';
        $techVueJs->icon = 'fa-brands fa-vuejs';
        $techVueJs->save();
        
        $techPVP = new Technology();
        $techPVP->name = 'PHP';
        $techPVP->icon = 'fa-brands fa-php';
        $techPVP->save();
        
        $techLaravel = new Technology();
        $techLaravel->name = 'Laravel';
        $techLaravel->icon = 'fa-brands fa-laravel';
        $techLaravel->save();
    }
}
