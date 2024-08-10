<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => bcrypt('admin'),
                'is_admin' => true,
            ]
        ];

        foreach ($admin as $key => $value) {
            User::create($value);
        };
    }
}
