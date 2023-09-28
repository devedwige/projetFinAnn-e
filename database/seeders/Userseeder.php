<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom' => 'SOMBOUGMA',
             'prenom' => 'Edwige',
              'matricule' => 'ADMIN01',
              'centre' => 'CSPS sect9/KDG',
              'phone' => 65600177,
              'password' =>bcrypt('123456'),
                 'role_id' => 4,

        ]);
    }
}
