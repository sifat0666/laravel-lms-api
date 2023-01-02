<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $audit_permission = Permission::create(['name' => 'audit_permission']);
        $students_control = Permission::create(['name' => 'students_control']);
        $exam_control = Permission::create(['name' => 'exam_control']);
        $result_control = Permission::create(['name' => 'result_control']);
        $teacher_control = Permission::create(['name' => 'teacher_control']);
        $doner_control = Permission::create(['name' => 'doner_control']);
        $library_control = Permission::create(['name' => 'library_control']);




        //create admin
        $admin_role = Role::create(['name' => 'admin']);
        $admin_role->givePermissionTo([
            $audit_permission,
            $students_control,
            $exam_control,
            $result_control,
            $teacher_control,
            $doner_control,
            $library_control,
        ]);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole($admin_role);
        $admin->givePermissionTo([
            $audit_permission,
            $students_control,
            $exam_control,
            $result_control,
            $teacher_control,
            $doner_control,
            $library_control,
        ]);

        //user role
        $user_role = Role::create(['name' => 'user']);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $user->assignRole($user_role);
        $user->givePermissionTo([
            // $audit_permission,
            // $student_control,
            // $exam_control,
            // $result_control,
            // $teacther_control,
            // $doner_control,
            // $library_control,
        ]);
    }
}