<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cours;

class CoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cours::create(['nom' => 'Introduction à l\'Écologie', 'description' => 'Comprendre les bases de l\'écologie', 'duree' => 4]);
        Cours::create(['nom' => 'Énergies Renouvelables', 'description' => 'Explorer les différentes sources d\'énergie renouvelable', 'duree' => 6]);
        Cours::create(['nom' => 'Recyclage et Réduction des Déchets', 'description' => 'Techniques et pratiques pour réduire les déchets', 'duree' => 3]);
        Cours::create(['nom' => 'Gestion de l\'eau', 'description' => 'Utilisation efficace et durable de l\'eau', 'duree' => 5]);
        Cours::create(['nom' => 'Biodiversité et Conservation', 'description' => 'Importance de la biodiversité et stratégies de conservation', 'duree' => 4]);
    }
}
