<?php
use App\User;
use Illuminate\Database\Seeder;



Class UsersTableSeeder extends Seeder {


    public function run(){
        DB::table('users')->insert([
            'name' => "joão",
            'email' => 'jssilvajoao@hotmail.com',
            'password' => bcrypt('maria'),
            'role' => 'master',
            'active' => 1,
            'verified' => 1,
            
        ]);
        factory(User::class,10)->states('admin')->create();
    }
}