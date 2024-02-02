<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Service;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2)->create();
        Categorie::create([
            "title"=>"Plombier",
        ]);
        Categorie::create([
            "title"=>"Jardinier",
        ]);
        Categorie::create([
            "title"=>"Informatique",
        ]);
        Categorie::create([
            "title"=>"Apprentissage",
        ]);
        Service::create([
            'category_id'=>1,
            "nom"=>"snini",
            "prenom"=>"ayoub",
            "email"=>"ayoub@gmail.com",
            'telephone'=>0663314441,
            "title"=>"reparer la telivision",
            'price'=>545,
            'description'=>'uyrfurezrhoz irofezorhfzehrb gfoiberohgfbeoiezf oerihfezohr ',

        ]);
        Service::create([
            'category_id'=>2,
            "nom"=>"Marwan",
            "prenom"=>"ahmed",
            "email"=>"ayoubsnim@gmail.com",
            'telephone'=>0614441,
            "title"=>"reparer l ordinateur",
            'price'=>10,
            'description'=>'uyrfurezrhoz iroflorem sdihbjbhds dsj flsdbflkhsdbfklsqn fksq fdlkqskbsqlksqkfhksqbfksfk ',

        ]);
        Service::create([
            'category_id'=>3,
            "nom"=>"oualid",
            "prenom"=>"nila",
            "email"=>"oualidsilaa@gmail.com",
            'telephone'=>0615554441,
            "title"=>"reparer telephone",
            'price'=>1000,
            'description'=>'uyrfurezrhoz iroflorem sdihbjbhds dkcjnfsdkljnfcjksdnckjnv<dkdsj flsdbflkhsdbfklsqn fksq fdlkqskbsqlksqkfhksqbfksfk ',

        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
