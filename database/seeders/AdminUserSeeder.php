<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;  // for seeding
use Illuminate\Support\Str;         // for seeding
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('password'),
            'name'=>'AKS',
            'phone'=>'095059162',
            'address'=>'Yangon',
        ]);
    }
}
