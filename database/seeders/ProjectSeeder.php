<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\project;

class ProjectSeeder extends Seeder
{
    //  funzione ceh genera 2 numeri diversi //
    public function randomNumbers()
    {
        $numbers = [];
        for ($i = 0; $i < 2; $i++) {
            $randomNum = random_int(1, 6);
            if (!in_array($randomNum, $numbers)) {
                $numbers[] = $randomNum;
            } else {
                $i--;
            }
        }
        return $numbers;
    }

    public function run(): void
    {

        for ($i = 0; $i < 15; $i++) {

            $new_project = new project();
            $new_project->name = 'progetto_' . $i + 1;
            $new_project->img = 'https://picsum.photos/id/' . random_int(1, 1083) . '/600/300';
            $new_project->description = 'progetto molto bello blabalaba';
            $new_project->codeLink = 'https://github.com/Vladislav-Ciuperca/Vladislav_Ciuperca_Portfolio';
            $new_project->category_id = random_int(1, 3);

            $new_project->save();

            // $nuemri = [
            //     random_int(1, 6),
            //     random_int(1, 6)
            // ];


            $new_project->technologies()->attach($this->randomNumbers());
            // $new_project -> technologies()->attach( random_int(1,6 ));
        }
    }
}
