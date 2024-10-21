<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tecnology;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catCSS = new Tecnology();
        $catCSS->name = 'CSS';
        $catCSS->icon = 'fa-brands fa-css3';
        $catCSS->save();
        
        $catBootStrap = new Tecnology();
        $catBootStrap->name = 'Bootstrap';
        $catBootStrap->icon = 'fa-brands fa-bootstrap';
        $catBootStrap->save();
        
        $catCSScatJS = new Tecnology();
        $catCSScatJS->name = 'JavaScript';
        $catCSScatJS->icon = 'fa-brands fa-js';
        $catCSScatJS->save();
        
        $catVueJs = new Tecnology();
        $catVueJs->name = 'Vuejs';
        $catVueJs->icon = 'fa-brands fa-vuejs';
        $catVueJs->save();
        
        $catPVP = new Tecnology();
        $catPVP->name = 'PHP';
        $catPVP->icon = 'fa-brands fa-php';
        $catPVP->save();
        
        $catLaravel = new Tecnology();
        $catLaravel->name = 'Laravel';
        $catLaravel->icon = 'fa-brands fa-laravel';
        $catLaravel->save();
    }
}
