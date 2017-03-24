<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Bikin roles */
        $student = new Role();
        $student->name         = 'student';
        $student->display_name = 'Mahasiswa';
        $student->description  = 'User is only allowed to vote';
        $student->save();

        $lecturer = new Role();
        $lecturer->name         = 'lecturer';
        $lecturer->display_name = 'Dosen';
        $lecturer->description  = 'User is allowed to manage question';
        $lecturer->save();

        /* Bikin permission */
        $voting = new Permission();
        $voting->name         = 'vote';
        $voting->display_name = 'Voting';
        $voting->save();

        $manage = new Permission();
        $manage->name         = 'manage';
        $manage->display_name = 'Manage questions';
        $manage->save();

        /* Attach role-permission */
        $student->attachPermission($voting);
        $lecturer->attachPermission($manage);

        /* Attach user-role */
        $dsn = User::where('email', 'dosen@gmail.com')->first();
        $dsn->attachRole($lecturer);
        $mhs = User::where('email', 'mahasiswa@gmail.com')->first();
        $mhs->attachRole($student);
    }
}
