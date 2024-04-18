<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        //User::factory(10)->create();

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        User::create([
            'name' => 'Paulo Clara',
            'email' => 'pjclara@gmail.com',
            'password' => Hash::make('pc2406451'),
        ]);

        // create a role
        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'User']);

        //assign role to user
        $user = User::find(1);

        $user->assignRole($adminRole);
        $user->assignRole($userRole);

         // create permissions
         $permissions = [
            'create galleries',
            'update galleries',
            'delete galleries',
            'restore galleries',
            'force delete galleries'
        ];

        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::create(['name' => $permission]);
        }


        // assign permissions to Admin role
        $adminRole->givePermissionTo($permissions);

        // assign permissions create to User role
        $userRole->givePermissionTo('create galleries');

    }

    
}
