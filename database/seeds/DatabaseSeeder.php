<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);


        //2. Professeur
        App\Professeur::create(['id'=>1, 'firstName'=>'Jean', 'lastName'=>'Dupond','telephone'=>0101010101, 'mail'=>'pierre.richard@hbf.fr','specialite_id'=>1]);
        App\Professeur::create(['id'=>2, 'firstName'=>'Aline', 'lastName'=>'Dubois', 'telephone'=>0202020202,'mail'=>'sifes@kjbf.f', 'specialite_id'=>1]);
        App\Professeur::create(['id'=>3, 'firstName'=>'Vincent', 'lastName'=>'Legrand', 'telephone'=>0303030303,'mail'=>'ugs@kjbs.fr', 'specialite_id'=>4]);
        App\Professeur::create(['id'=>4, 'firstName'=>'Imane', 'lastName'=>'Kamal', 'telephone'=>0404040404,'mail'=>'fkbnfdk@fjbgr.fr', 'specialite_id'=>4]);

        // Specialite
        App\Specialite::create(['id'=>1, 'code'=>01, 'libelle'=>'JAVA/JEE']);
        App\Specialite::create(['id'=>2, 'code'=>02, 'libelle'=> '.Net']);
        App\Specialite::create(['id'=>3, 'code'=>03, 'libelle'=> 'Gestion de projet']);
        App\Specialite::create(['id'=>4, 'code'=>04, 'libelle'=> 'Cisco']);
        App\Specialite::create(['id'=>5, 'code'=>05, 'libelle'=> 'PHP']);
        
    }
}
