<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
            'name'=>"admin",
            'email'=>'admin@gmail.com',
            'phone'=>'01712458961',
            'cv_link'=>'https://static8.depositphotos.com/1012223/980/i/600/depositphotos_9803930-stock-photo-demo-cubes.jpg',
            'password'=>'123456',
            'usertype'=>'1',

        ]);
    }
}
