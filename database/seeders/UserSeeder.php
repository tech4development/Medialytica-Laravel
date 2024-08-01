<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users' )->insert([
        [
          'name' => 'Super Admin',
          'email' => 'superadmin@gmail.com',
          'password' => Hash::make('12345678'),
          'user_role' => 'super admin'

        ],
        [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'admin'

          ],
          [
            'name' => 'Publisher',
            'email' => 'publisher@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'publisher'

          ],
          [
            'name' => 'SocialPublisher',
            'email' => 'socialpublisher@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'socialpublisher'

          ],
          [
            'name' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'editor'

          ],
          [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'user_role' => 'user'

          ],

        ]);
    }
}
