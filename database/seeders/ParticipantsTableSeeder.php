<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Participants;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Participants::create(['nom' => 'John Doe', 'email' => 'john@example.com', 'commentaires' => 'Très bon cours, j\'ai beaucoup appris !']);
        Participants::create(['nom' => 'Jane Smith', 'email' => 'jane@example.com', 'commentaires' => 'Excellent contenu et bien structuré.']);
        Participants::create(['nom' => 'Emily Johnson', 'email' => 'emily@example.com', 'commentaires' => 'Informative et intéressante.']);
        Participants::create(['nom' => 'Michael Brown', 'email' => 'michael@example.com', 'commentaires' => 'J\'ai trouvé les cours très utiles.']);
        Participants::create(['nom' => 'Sarah Davis', 'email' => 'sarah@example.com', 'commentaires' => 'Une excellente introduction aux énergies renouvelables.']);
        Participants::create(['nom' => 'David Wilson', 'email' => 'david@example.com', 'commentaires' => 'Très bien expliqué.']);
        Participants::create(['nom' => 'Laura Garcia', 'email' => 'laura@example.com', 'commentaires' => 'Les ressources sont très complètes.']);
        Participants::create(['nom' => 'Robert Martinez', 'email' => 'robert@example.com', 'commentaires' => 'Une approche pratique et théorique.']);
        Participants::create(['nom' => 'Linda Anderson', 'email' => 'linda@example.com', 'commentaires' => 'Les quiz sont très utiles pour évaluer nos connaissances.']);
        Participants::create(['nom' => 'James Hernandez', 'email' => 'james@example.com', 'commentaires' => 'Les cours sur la gestion de l\'eau sont particulièrement intéressants.']);
    }
}
