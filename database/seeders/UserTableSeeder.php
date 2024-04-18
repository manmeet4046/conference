<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([

        
        [
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('111'),
            'role'=>'admin',
            'status'=>'active',
       
        ],

        [
            'name'=>'reviewer',
            'username'=>'reviewer',
            'email'=>'reviewer@gmail.com',
            'password'=> Hash::make('111'),
            'role'=>'reviewer',
            'status'=>'active',
        ],
        
        [
            'name'=>'author',
            'username'=>'author',
            'email'=>'author@gmail.com',
            'password'=> Hash::make('111'),
            'role'=>'author',
            'status'=>'active'   
        ]
    ]);
    }
}
