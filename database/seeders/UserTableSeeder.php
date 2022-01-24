<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rani Chennamma',
            'email' => 'abc@gmail.com'
        ]);

        User::create([
            'name' => 'Rani Chennamma1',
            'email' => 'abc1@gmail.com'
        ]);

        User::create([
            'name' => 'Rani Chennamma2',
            'email' => 'abc2@gmail.com'
        ]);

        User::create([
            'name' => 'Rani Chennamma3',
            'email' => 'abc3@gmail.com'
        ]);

        User::create([
            'name' => 'Rani Chennamma4',
            'email' => 'abc4@gmail.com'
        ]);

        User::create([
            'name' => 'Rani Chennamma5',
            'email' => 'abc5@gmail.com'
        ]);

        User::create([
            'name' => 'Rani Chennamma6',
            'email' => 'abc6@gmail.com'
        ]);

        User::create([
            'name' => 'Rani Chennamma7',
            'email' => 'abc7@gmail.com'
        ]);
        User::create([
            'name' => 'Rani Chennamma8',
            'email' => 'abc8@gmail.com'
        ]);
        User::create([
            'name' => 'Rani Chennamma9',
            'email' => 'abc9@gmail.com'
        ]);
    }
}
