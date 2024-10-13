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
        $catCSS = new Category();
        $catCSS->name = 'CSS';
        $catCSS->icon = 'fa-brands fa-css3';

        $catBootStrap = new Category();
        $catBootStrap->name = 'Bootstrap';
        $catBootStrap->icon = 'fa-brands fa-bootstrap';

        $catCSScatJS = new Category();
        $catCSScatJS->name = 'JavaScript';
        $catCSScatJS->icon = 'fa-brands fa-js';

        $catVueJs = new Category();
        $catVueJs->name = 'Vuejs';
        $catVueJs->icon = 'fa-brands fa-vuejs';

        $catPVP = new Category();
        $catPVP->name = 'PHP';
        $catPVP->icon = 'fa-brands fa-php';

        $catLaravel = new Category();
        $catLaravel->name = 'Laravel';
        $catLaravel->icon = 'fa-brands fa-laravel';
    }
}
