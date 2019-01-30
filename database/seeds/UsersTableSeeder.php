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
            'cpf' =>'11122233365',
            'name' => 'Diogo José',
            'phone' => '555555',
            'birth' => '1991-10-14',
            'gender' => 'M',
            'email' => 'diogojose@email.com',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456'): 123456,
        ]);

    }
}
