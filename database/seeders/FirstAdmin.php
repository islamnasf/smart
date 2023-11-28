<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create($this->adminData());
    }
    private function adminData(){
        return[
            'name'=>'admin',
            'phone'=>'0123456789',
            'IsAdmin'=>'1',
            'user_type'=>'1',
            'password'=>Hash::make("123456"),
           
        ];
    } 
}
