<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ressources;

class RessourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ressources::create(['titre' => 'Vidéo : Introduction à l\'Écologie', 'description' => 'Une vidéo pour comprendre les bases de l\'écologie.', 'url' => 'https://example.com/video-introduction-ecologie']);
        Ressources::create(['titre' => 'PDF : Guide sur les Énergies Renouvelables', 'description' => 'Un guide complet sur les différentes sources d\'énergie renouvelable.', 'url' => 'https://example.com/guide-energies-renouvelables']);
        Ressources::create(['titre' => 'Quiz : Recyclage et Réduction des Déchets', 'description' => 'Testez vos connaissances sur le recyclage et la réduction des déchets.', 'url' => 'https://example.com/quiz-recyclage']);
        Ressources::create(['titre' => 'Article : Gestion de l\'eau', 'description' => 'Un article sur l\'utilisation efficace et durable de l\'eau.', 'url' => 'https://example.com/article-gestion-eau']);
        Ressources::create(['titre' => 'Vidéo : Biodiversité et Conservation', 'description' => 'Vidéo expliquant l\'importance de la biodiversité.', 'url' => 'https://example.com/video-biodiversite']);
        Ressources::create(['titre' => 'PDF : Stratégies de Conservation', 'description' => 'Document détaillant les différentes stratégies de conservation.', 'url' => 'https://example.com/guide-conservation']);
        Ressources::create(['titre' => 'Quiz : Énergies Renouvelables', 'description' => 'Évaluez vos connaissances sur les énergies renouvelables.', 'url' => 'https://example.com/quiz-energies']);
        Ressources::create(['titre' => 'Article : Réduction des Déchets', 'description' => 'Article sur les pratiques de réduction des déchets.', 'url' => 'https://example.com/article-dechets']);
    }
}
