<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo "Seeding Roles Started" . PHP_EOL;
        Role::updateOrCreate(
            ['name' => 'superadmin', 'description' => "Super Administrator"],
            ['name' => "superadmin"]
        );

        Role::updateOrCreate(
            ['name' => 'admin', 'description' => "Administrator"],
            ['name' => "admin"]
        );
        Role::updateOrCreate(
            ['name' => 'clientsupport', 'description' => "Client Support Executive"],
            ['name' => "clientsupport"]
        );
        Role::updateOrCreate(
            ['name' => 'user', 'description' => "Registered User"],
            ['name' => "user"]
        );


        Role::updateOrCreate(
            ['name' => 'corporatebodystaff', 'description' => "Corporate Body Staff"]
        );

        echo "Seeding Roles Finished" . PHP_EOL;

        // Seeding users
        echo "Seeding Users Started" . PHP_EOL;
        $superadmin = Role::where('name', 'superadmin')->first();
        $admin = Role::where('name', 'admin')->first();
        $clientsupport = Role::where('name', 'clientsupport')->first();
        $user = Role::where('name', 'user')->first();

        User::updateOrCreate(
            [
                'name' => 'danielphp',
                'first_name' => 'Daniel',
                'last_name' => "Mabadeje",
                'role_id' => $superadmin->id,
                'email' => 'daniel@group12.com',
                'phone_no' => '+234123456789',
                'password' => bcrypt('password')
            ]
        );
        User::updateOrCreate(
            [
                'name'=> 'databishop',
                'first_name' => 'Abasifreke',
                'last_name' => "Nkanang",
                'role_id' => $superadmin->id,
                'email' => 'abas@group12.com',
                'phone_no' => '+234123456789',
                'password' => bcrypt('password')
            ]
        );

        

    }
}
