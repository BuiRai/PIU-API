<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $users = array(
            ['name' => 'admin', 'email' => 'admin@789.mx', 'password' => Hash::make('control')],
            ['name' => 'user', 'email' => 'user@gmail.com', 'password' => Hash::make('user')],
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin')]
        );

        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard();
    }
}
