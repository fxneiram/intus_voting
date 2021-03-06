<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Faver Neira',
            'email' => 'fxneiram@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->syncRoles(['Admin', 'Comun']);
        //$user->syncRoles(['Admin']);

        User::factory()->count(149)->create()
            ->each(function ($user) {
                $user->syncRoles(['Comun']);
            });

    }
}
