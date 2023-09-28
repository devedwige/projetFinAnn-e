<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['enfant','Agent_de_santé','parent','Administrateur'];
        foreach ($roles as $role) {
            Role::create([
                'intitule' => $role,
                'created_at' => now(),
                'updated_at' =>now()
            ]);
        }
    }
}
