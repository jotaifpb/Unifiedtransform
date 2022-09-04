<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class UsersTableSeeder extends Seeder {


    public function run()
    {
        DB::table('users')->insert([
            'name' => "joao",
            'email' => 'jssilvajoao@hotmail.com',
            'password' => bcryp('livro'),
            'role' => 'master',
            'active' => 1,
            'verified' => 1,
            
        ]);
        factory(User::class, 10)->states('admin')->create();
        factory(User::class, 10)->states('accountant')->create();
        factory(User::class, 10)->states('librarian')->create();
        factory(User::class, 30)->states('teacher')->create();
        factory(User::class, 200)->states('student')->create();
    }
}