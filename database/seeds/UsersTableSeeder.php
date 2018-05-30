<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
           'role_id' => 1,
           'name' => 'franz',
           'username' => 'fgupioc',
           'email' => 'dsdeg.9026@gmail.com',
           'password' => bcrypt(123456),
           'active' => true,
       ]);

        User::create([
            'role_id' => 2,
            'name' => 'maria',
            'username' => 'mariav',
            'email' => 'maria@gmail.com',
            'password' => bcrypt(123456),
            'active' => true,
        ]);
    }
}
