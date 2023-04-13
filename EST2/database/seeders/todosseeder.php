<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class todosseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $useradmin=User::create([
            'name'=>'admin gabo',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'fullacces'=>'yes',
            'codigo'=>'adn1',
        ]);
        $user1=User::create([
            'name'=>'usuario luis',
            'email'=>'luis@gmail.com',
            'password'=>Hash::make('luis'),
            'fullacces'=>'no',
            'codigo'=>'use1',
        ]);
    }
}
