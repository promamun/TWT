<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hashPassword = bcrypt('123456789');
        $adminStore = new Admin();
        $adminStore->user_name = 'Janine';
        $adminStore->email = 'Janine@gmail.com';
        $adminStore->password = $hashPassword;
        $adminStore->save();

        $adminId = Admin::find($adminStore->id);
        $adminId->roles()->attach(1);
    }
}
