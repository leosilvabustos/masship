<?php

use Illuminate\Database\Seeder;
use App\User as User;
  
class UserTableSeeder extends Seeder {
  
    public function run() {
        User::truncate();  
        User::create( [
            'email' => 'leosilvabustos@gmail.com' ,
            'password' => Hash::make( 'libertad' ) ,
            'name' => 'Leonardo Silva' ,
        ] );
    }
}