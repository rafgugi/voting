<?php

use Illuminate\Database\Seeder;
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
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();

        $user = new User;
        $user->name = 'Dosen';
        $user->email = 'dosen@gmail.com';
        $user->password = bcrypt('dosen');
        $user->save();

        $user = new User;
        $user->name = 'Mahasiswa';
        $user->email = 'mahasiswa@gmail.com';
        $user->password = bcrypt('mahasiswa');
        $user->save();
    }
}
