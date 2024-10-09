<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createRolesAndPermissions();
        $this->createUsersWithRoles();
    }

    /**
     * Create roles and assign permissions to them.
     */
    protected function createRolesAndPermissions(): void
    {
        $rolesWithPermissions = [
            'Student' => ['dashboard', 'profile'],
            'Lecturer' => ['dashboard', 'profile'],
        ];

        foreach ($rolesWithPermissions as $roleName => $permissions) {
            $role = Role::findOrCreate($roleName);

            foreach ($permissions as $permissionName) {
                $permission = Permission::findOrCreate($permissionName);
                $role->givePermissionTo($permission);
            }
        }
    }

    /**
     * Create users and assign roles to them.
     */
    protected function createUsersWithRoles(): void
    {
        $usersData = [
            [
                'name' => 'Lecturer User',
                'email' => 'lecturer@gmail.com',
                'role' => 'Lecturer',
            ],
            [
                'name' => 'Student User',
                'email' => 'student@gmail.com',
                'role' => 'Student',
            ],
        ];

        foreach ($usersData as $userData) {
            $user = User::factory()->create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make('password'),
                'dob' => '2000-01-01',
            ]);

            $user->assignRole($userData['role']);
        }
    }
}
