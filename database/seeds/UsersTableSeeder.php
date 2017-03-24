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
        $dsn = new User;
        $dsn->name = 'Dosen';
        $dsn->email = 'dosen@gmail.com';
        $dsn->password = bcrypt('dosen');
        $dsn->save();

        $mhs = new User;
        $mhs->name = 'Mahasiswa';
        $mhs->email = 'mahasiswa@gmail.com';
        $mhs->password = bcrypt('mahasiswa');
        $mhs->save();
    }
}
