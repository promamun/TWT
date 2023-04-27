<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'superAdmin',
            ],
            [
                'name' => 'admin',
            ],
            [
                'name' => 'view',
            ],
            [
                'name' => 'editor',
            ],
            [
                'name' => 'publisher',
            ],
            [
                'name' => 'dashboard',
            ],
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
