<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf' =>'',
            'name' => 'Tiago Rafael',
            'phone' => '555555',
            'birth' => '1990-02-21',
            'gender' => 'M',
            'email' => 'tiagorafael@email.com',
            'password' => bcrypt('123456'),
        ]);

    }
}
