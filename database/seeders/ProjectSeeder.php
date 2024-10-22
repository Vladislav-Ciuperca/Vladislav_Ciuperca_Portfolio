<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\project;

class ProjectSeeder extends Seeder
{
    //  funzione ceh genera 2 numeri diversi //
    public function categoryNumber()
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

    public function imageNumber()
    {
        $avoidNumbers = [86, 97, 105, 138, 148, 150, 205, 207, 224, 226, 245, 246, 262, 285,286, 298];

        do {
            $randomNum = random_int(1, 300);
        } while (in_array($randomNum, $avoidNumbers));


        return $randomNum;
    }

    public function run(): void
    {

        for ($i = 0; $i < 300; $i++) {

            $imageNumber = $this->imagenumber();

            $new_project = new project();
            $new_project->name = 'progetto_' . $i + 1;
            $new_project->img = 'https://picsum.photos/id/' . $imageNumber . '/600/300';
            $new_project->description = 'progetto molto bello blabalaba';
            $new_project->codeLink = 'https://github.com/Vladislav-Ciuperca/Vladislav_Ciuperca_Portfolio';
            $new_project->category_id = random_int(1, 3);
            $new_project->imageNum = $imageNumber;

            $new_project->save();

            $new_project->technologies()->attach($this->categoryNumber());
        }
    }
}
