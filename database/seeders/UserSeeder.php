<?php

namespace Database\Seeders;

use App\Models\Constants;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "id" => 1,
            "role_id"=>Constants::$AdminRoleId,
            'name'=>"Админ Админов",
            'email'=>"admin@gmail.com",
            'password'=>bcrypt("admin123"),
            'status'=>true,
            'verified'=>true,
        ]);
    }
}
