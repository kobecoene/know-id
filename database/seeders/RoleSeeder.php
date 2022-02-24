<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//      Role::factory()->times(10)->create();
        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'Werkgever'
        ]);

        DB::table('roles')->insert([
            'name' => 'Werknemer'
        ]);

        DB::table('roles')->insert([
            'name' => 'Projectleider'
        ]);
    }
}
