<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit any resources'; // optional
        $admin->save();

        $student = new Role();
        $student->name         = 'student';
        $student->display_name = 'Mahasiswa'; // optional
        $student->description  = 'User is only allowed to vote'; // optional
        $student->save();

        $lecturer = new Role();
        $lecturer->name         = 'lecturer';
        $lecturer->display_name = 'Dosen'; // optional
        $lecturer->description  = 'User is allowed to manage question'; // optional
        $lecturer->save();
    }
}
