<?php

namespace Database\Seeders;

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
        Framework\User::factory()->count(10)->create()->each(function ($user) {
            $user->profile()->create([
                'user_id' => $user->id
            ]);
        });
}
}
