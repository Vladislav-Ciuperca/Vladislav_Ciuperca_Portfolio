<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\project;

class projects_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i < 15; $i++) { 
            
            $new_project = new project();
            $new_project -> name = 'progetto_'.$i+1;
            $new_project -> img = 'https://www.dequo.it/articoli/app/uploads/2023/05/copyright-immagini-generate-ai12.jpg';
            $new_project -> description = 'progetto molto bello blabalaba';
            $new_project -> codeLink = 'https://github.com/Vladislav-Ciuperca/Vladislav_Ciuperca_Portfolio';
            $new_project -> tecnology_id = random_int(1, 6);
            $new_project ->save();
        }

    }
}
