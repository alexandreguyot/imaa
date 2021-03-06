<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'lastname' => 'Guillaume',
            'firstname' => 'Sourisseau',
            'email' => 'sourisseauguillaume@gmail.com',
            'password' => bcrypt('imaaGuillaume'), // secret
            'remember_token' => str_random(10),
            'telephone' => '0606060606',
            'entreprise' => '',
            'role' => 'Administrateur',
        ]);

        User::create([
            'lastname' => 'Essaie',
            'firstname' => 'Essaie',
            'email' => 'essaie@essaie.com',
            'password' => bcrypt('essaie'), // secret
            'remember_token' => str_random(10),
            'telephone' => '0202020202',
            'entreprise' => 'ESSAIE',
            'role' => 'Utilisateur',
        ]);
    }
}
